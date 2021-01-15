<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use App\StudentDocument;
use App\StudentInvoice;
use App\StudentNotes;
use App\Payment;
use App\Course;
use App\PaymentRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;

class UserController extends Controller
{
    public function profile($id){
        $user =  User::find($id);
        if ( ! $user){
            abort(404);
        }

        $title = $user->name;
        return view(theme('profile'), compact('user', 'title'));
    }

    public function review($id){
        $review = Review::find($id);
        $title = 'Review by '. $review->user->name;

        return view(theme('review'), compact('review', 'title'));
    }

    public function updateWishlist(Request $request){
        $course_id = $request->course_id;
        $user = Auth::user();
        
        if (!$user->wishlist->contains($course_id)){ 
          
            $user->wishlist()->attach($course_id);
            $response = ['success' => 1, 'state' => 'added'];
            
        }else{
          
            $user->wishlist()->detach($course_id);
            $response = ['success' => 1, 'state' => 'removed']; 
        }
    

        $addedWishList = DB::table('wishlists')->where('user_id', $user->id)->pluck('course_id');

        $user->update_option('wishlists', $addedWishList);

        return $response;
    }



    public function changePassword(){
        $title = __a('change_password');
        return view('admin.change_password', compact('title'));
    }

    public function changePasswordPost(Request $request){
        if(config('app.is_demo')){
            return redirect()->back()->with('error', 'This feature has been disable for demo');
        }
        $rules = [
            'old_password'  => 'required',
            'new_password'  => 'required|confirmed',
            'new_password_confirmation'  => 'required',
        ];
        $this->validate($request, $rules);

        $old_password = $request->old_password;
        $new_password = $request->new_password;

        if(Auth::check()) {
            $logged_user = Auth::user();

            if(Hash::check($old_password, $logged_user->password)) {
                $logged_user->password = Hash::make($new_password);
                $logged_user->save();
                return redirect()->back()->with('success', __a('password_changed_msg'));
            }
            return redirect()->back()->with('error', __a('wrong_old_password'));
        }
    }


    public function users(Request $request){
        $ids = (array) $request->bulk_ids;

        if ( is_array($ids) && in_array(1, $ids)){
            return back()->with('error', __a('admin_non_removable'));
        }

        //Update
        if ($request->bulk_action_btn === 'update_status' && $request->status && is_array($ids) && count($ids)){
            User::whereIn('id', $ids )->update(['active_status' => $request->status]);
            return back()->with('success', __a('bulk_action_success'));
        }

        if ($request->bulk_action_btn === 'delete' && is_array($ids) && count($ids)){
            if(config('app.is_demo')) return back()->with('error', __a('demo_restriction'));

            User::whereIn('id', $ids )->delete();
            return back()->with('success', __a('bulk_action_success'));
        }

        $users = User::query();
        if ($request->q){
            $users = $users->where(function($q)use($request) {
                $q->where('name', 'like', "%{$request->q}%")
                    ->orWhere('email', 'like', "%{$request->q}%");
            });
        }

        if ($request->filter_user_group){
            $users = $users->where('user_type', $request->filter_user_group);
        }
        if ($request->filter_status){
            $users = $users->where('active_status', $request->filter_status);
        }


        $title = __a('users');
        $users = $users->orderBy('id', 'desc')->paginate(100);
        return view('admin.users.index', compact('title', 'users'));
    }

    public function view(Request $request){
     $user_id = $request->id;
     $users = User::with('enrolls')->with('purchases')->with('country')->where('id', $user_id)->get();
     $documents = StudentDocument::where('user_id',$user_id)->get(); 
     $invoices = StudentInvoice::where('user_id',$user_id)->get(); 
     $notes = StudentNotes::where('user_id',$user_id)->get(); 

     return view('admin.users.view', compact('title', 'users','documents','invoices','notes'));
    }  
    public function edit(Request $request){
    
       $data = [
        'name'         => clean_html($request->m_name),
        'email'            => $request->m_email,
        'phone'          => $request->m_phone,
        'gender'           => $request->m_gender,
        'address'            => $request->m_address,
        'address_2'          => $request->m_street,
        'city'            => $request->m_city,
        'country_id'          => $request->m_country,
        'zip_code'           => $request->m_zip_code,
    ];
   $user_id = $request->m_user_id;
   User::where('id', $user_id)->update($data);
   return back()->with('success', trans('Successfully Edited'));

    }
    public function edit_password(Request $request){
        $rules = [
            'password'  => 'required|confirmed',
            'password_confirmation'  => 'required',
        ];
        $this->validate($request, $rules);
        $user = User::find($request->user_id);
       
        $user->password = bcrypt($request->password);
       
        $user->save();
        
       return back()->with('success', trans('Successfully Edited'));
    }
    public function upload(Request $request){
        if($request->hasFile('image'))
        {
            $allowedfileExtension=['pdf','jpg','png','docx','PNG'];
            $files = $request->file('image');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
           
            $f_name = $request->user_id.$filename;
            if($check)
            {
                $destinationPath = 'uploads/StudentDocuments';
                $files->move($destinationPath,$f_name);

                $data = [
                    'user_id'         => $request->user_id,
                    'document_name'   => $f_name,
                    'document_url'    => 'uploads/StudentDocuments/'.$f_name,
                    'type'           => $request->type_of_document,
                   
                ];
                StudentDocument::create($data);
                return back()->with('success', trans('Successfully Uploaded'));

            }
            else
            {
                return back()->with('error', trans('Sorry,this extension does not supporting !!'));
            }
            

        }else{
            return back()->with('error', trans('Please select an image'));
        }
    }
    public function delete($id){
        StudentDocument::where('id', $id)->delete();
        return back()->with('success', trans('Deleted'));
    }
    public function download($id){
       
        $myFile = StudentDocument::find($id);

    	return response()->download($myFile->document_url);
    }
    public function download_invoice($id){
      
         $payment = StudentInvoice::with('payment')->with('courses')->with('user')->where('id',$id)->get();
       
         $record_details = PaymentRecord::where('student_invoice_id',$id)->get();
     
         $total_amount = 0;
         if(count($record_details)>0){
         foreach($record_details as $records){
 
             $total_amount =  $total_amount + $records['amount_paid'];
         }
     }
          $due = ($payment[0]['payable_amount'] - $total_amount);
          $due = round($due);

          $payment[0]['due'] = $due;


      
        $destinationPath = 'uploads/invoice/';
        $file_name = 'invoice_'.$id.'.pdf';
        view()->share('payment',$payment);
        $pdf = PDF::loadView(theme('dashboard.pdf_view'), compact('payment'));
        return $pdf->download($file_name);
    }
    public function add_notes(Request $request){
        if($request->notes==''){
        }
      
        StudentNotes::firstOrCreate([
            'user_id' => $request->user_id,
        ])->update([
            'notes' => $request->notes,
            'user_id' => $request->user_id,
        ]);

       return back()->with('success', trans('Successfully Added'));

    }
    public function edit_invoice(Request $request){
       
        $invoice_details = StudentInvoice::find($request->id);
        return json_encode($invoice_details);
    }
    public function update_invoice(Request $request){
  
        $invoice_details = StudentInvoice::find($request->m_invoice_id);
        $total_fee =  $invoice_details['course_fee'] + $invoice_details['r_fee'];

        $discount = $invoice_details['course_fee'] + $request->m_extra_discount;
        $after_discount =($total_fee * ($discount)/100);
        $fee =  $total_fee - $after_discount;
        $payable_amount = $online_t_fee = $fee+($fee * 20/100);


        //$discount_amount =  $invoice_details['final_cost'] * ($request->m_extra_discount/100);
        //$payable_amount = $invoice_details['final_cost'] - $discount_amount;
      
        $data = [
         'invoice_number'            => $request->m_invoice_number,
         'po_number'          => $request->m_po_number,
         'extra_discount'           => $request->m_extra_discount,
         'reference_number'            => $request->m_reference_number,
         'payable_amount'             => $payable_amount,
         'final_cost'               =>$online_t_fee,
     ];
     $invoice_id = $request->m_invoice_id;
    
    StudentInvoice::where('id', $invoice_id)->update($data);
    return back()->with('success', trans('Successfully Edited'));
 
     }
     public function download_registration_letter($id){
        $payment = StudentInvoice::with('payment')->with('courses')->with('user')->where('id',$id)->get();
          $destinationPath = 'uploads/Registration/';
          $file_name = 'registrationletter'.$id.'.pdf';
          view()->share('payment',$payment);
          $pdf = PDF::loadView(theme('dashboard.registration_view'), compact('payment'));
          return $pdf->download($file_name);
     }
     public function download_offer_letter($id){
        $payment = StudentInvoice::with('payment')->with('courses')->with('user')->where('id',$id)->get();
  
          $destinationPath = 'uploads/Offer/';
          $file_name = 'offerletter'.$id.'.pdf';
          view()->share('payment',$payment);
          $pdf = PDF::loadView(theme('dashboard.offer_view'), compact('payment'));
          return $pdf->download($file_name);
     }
     public function add_record(Request $request){
       
        $document_url = '';

        if($request->hasFile('m_record_attachmenet'))
        {
           
            $allowedfileExtension=['pdf','jpg','png','docx','PNG'];
            $files = $request->file('m_record_attachmenet');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            
            if($check)
            {
                $destinationPath = 'uploads/RecordAttachments';
                $files->move($destinationPath,$filename);
                $document_url  = 'uploads/RecordAttachments/'.$filename;
            }
           

        }

        $invoice_id = $request->m_record_invoice_id;
       
        $invoice_details = StudentInvoice::find($invoice_id);
    

        $record_details = PaymentRecord::where('student_invoice_id',$invoice_id)->get();
     
        $total_amount = 0;
        if(count($record_details)>0){
        foreach($record_details as $records){

            $total_amount =  $total_amount + $records['amount_paid'];
        }
    }
         $due = ($invoice_details['payable_amount'] - $total_amount)-$request->m_record_amount;
         $due = round($due);
            $data = [
                'user_id'            => $invoice_details['user_id'],
                'payment_id'            => $invoice_details['payment_id'],
                'student_invoice_id'    => $invoice_id,
                'amount_paid'            => $request->m_record_amount,
                'due'            => $due,
                'payment_mode'          => $request->m_record_date,
                'payment_date'           => $request->m_record_mode,
                'reference_number'            => $request->m_record_reference,
                'notes'             => $request->m_record_notes,
                'attachment_url'            =>$document_url 
            ];

     
       
      $payment =  PaymentRecord::create($data);
      $half_amount = $invoice_details['payable_amount'] * 40/100;

        if( $due < $half_amount){
            $payment = Payment::find($invoice_details['payment_id']);
            
            if ($payment){
                $payment->status = "success";
                 Payment::where('id',$invoice_details['payment_id'])->update(['status' => 'success']);
                // $payment->save_and_sync();
                DB::table('earnings')->where('payment_id', $invoice_details['payment_id'])->where('course_id', $invoice_details['course_id'])->update(['payment_status' => $payment->status]);
                DB::table('enrolls')->where('payment_id', $invoice_details['payment_id'])->where('course_id', $invoice_details['course_id'])->update(['status' =>$payment->status]);
            }
        }

       return back()->with('success', trans('Payment Recorded'));
     }

}
