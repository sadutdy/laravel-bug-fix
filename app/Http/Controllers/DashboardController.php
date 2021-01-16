<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Course;
use App\StudentDocument;
use App\StudentInvoice;
use App\PaymentRecord;
use App\BillingDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;

class DashboardController extends Controller
{
    public function index(){
        $title = __t('dashboard');
        $document_flag = 0;
        $user = Auth::user();

        $chartData = null;
        if ($user->user_type == "student") {
          $documents = StudentDocument::where('user_id',$user->id)->get();
         if(count($documents)==0){
             $document_flag = 1;
         }
        }
        if ($user->isInstructor) {
            /**
             * Format Date Name
             */
            $start_date = date("Y-m-01");
            $end_date = date("Y-m-t");

            $begin = new \DateTime($start_date);
            $end = new \DateTime($end_date . ' + 1 day');
            $interval = \DateInterval::createFromDateString('1 day');
            $period = new \DatePeriod($begin, $interval, $end);

            $datesPeriod = array();
            foreach ($period as $dt) {
                $datesPeriod[$dt->format("Y-m-d")] = 0;
            }

            /**
             * Query This Month
             */

            $sql = "SELECT SUM(instructor_amount) as total_earning,
              DATE(created_at) as date_format
              from earnings
              WHERE instructor_id = {$user->id} AND payment_status = 'success'
              AND (created_at BETWEEN '{$start_date}' AND '{$end_date}')
              GROUP BY date_format
              ORDER BY created_at ASC ;";
            $getEarnings = DB::select(DB::raw($sql));

            $total_earning = array_pluck($getEarnings, 'total_earning');
            $queried_date = array_pluck($getEarnings, 'date_format');


            $dateWiseSales = array_combine($queried_date, $total_earning);

            $chartData = array_merge($datesPeriod, $dateWiseSales);
            foreach ($chartData as $key => $salesCount) {
                unset($chartData[$key]);
                //$formatDate = date('d M', strtotime($key));
                $formatDate = date('d', strtotime($key));
                $chartData[$formatDate] = $salesCount;
            }
        }

        return view(theme('dashboard.dashboard'), compact('title', 'chartData','document_flag'));
    }

    public function profileSettings(){
        $title = __t('profile_settings');
        return view(theme('dashboard.settings.profile'), compact('title'));
    }

    public function profileSettingsPost(Request $request){
        $rules = [
            'name'      => 'required',
            'email'      => 'required|email',
            'job_title' => 'max:220',
        ];
        $this->validate($request, $rules);

        $input = array_except($request->input(), ['_token', 'social']);
        $user = Auth::user();
        $user->update($input);
        $user->update_option('social', $request->social);

        return back()->with('success', __t('success'));
    }

    public function resetPassword(){
        $title = __t('reset_password');
        return view(theme('dashboard.settings.reset_password'), compact('title'));
    }

    public function resetPasswordPost(Request $request){
        if(config('app.is_demo')){
            return redirect()->back()->with('error', 'This feature has been disable for demo');
        }
        $rules = [
            'old_password'  => 'required',
            'new_password'  => 'required|confirmed',
            'new_password_confirmation'  => 'required',
        ];
        $this->validate($request, $rules);

        $old_password = clean_html($request->old_password);
        $new_password = clean_html($request->new_password);

        if(Auth::check()) {
            $logged_user = Auth::user();

            if(Hash::check($old_password, $logged_user->password)) {
                $logged_user->password = Hash::make($new_password);
                $logged_user->save();
                return redirect()->back()->with('success', __t('password_changed_msg'));
            }
            return redirect()->back()->with('error', __t('wrong_old_password'));
        }
    }

    public function enrolledCourses(){
        $title = __t('enrolled_courses');
        return view(theme('dashboard.enrolled_courses'), compact('title'));
    }

    public function myReviews(){
        $title = __t('my_reviews');
        return view(theme('dashboard.my_reviews'), compact('title'));
    }

    public function wishlist(){
        $title = __t('wishlist');
        return view(theme('dashboard.wishlist'), compact('title'));
    }

    public function purchaseHistory(){
        $title = __t('purchase_history');
        return view(theme('dashboard.purchase_history'), compact('title'));
    }
    public function files(){
        $title = "Files";
        $user = Auth::user();
        $documents = StudentDocument::where('user_id',$user->id)->get();
        return view(theme('dashboard.files'), compact('title','documents'));
    }

    public function purchaseView($id){
        $title = __a('purchase_view');
        $payment = Payment::find($id);
        $student_invoice = StudentInvoice::where('payment_id',$id)->get();
        $payment_records = PaymentRecord::where('payment_id',$id)->get();
        $billing_details = BillingDetails::with('countrydtls')->where('purchase_id',$id)->get();
     
        return view(theme('dashboard.purchase_view'), compact('title', 'payment','student_invoice','payment_records','billing_details'));
    }
    public function invoiceView($id){
        $title = "Invoice View";
        $payment = Payment::find($id);
      //  $student_invoice = StudentInvoice::where('payment_id',$id)->get();

      //  view()->share('employee',$data);

        return view(theme('dashboard.invoice_view'), compact('title', 'payment','student_invoice'));
    }
    public function downloadPDF($id){
        $payment = Payment::find($id);
        $destinationPath = 'uploads/invoice/';
        $file_name = 'invoice_'.$id.'.pdf';
        view()->share('payment',$payment);
        $pdf = PDF::loadView(theme('dashboard.pdf_view'), compact('payment'));
        return $pdf->download($file_name);
      
    }
    public function studentDocument(Request $request){
       
        if($request->hasFile('image'))
        {           
           
            $allowedfileExtension=['pdf','jpg','png','docx','PNG'];
            $files = $request->file('image');
             $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            $user = Auth::user();
            $f_name = $user->id.$filename;
            if($check)
            {
                $destinationPath = 'uploads/StudentDocuments';
                $files->move($destinationPath,$f_name);

                $data = [
                    'user_id'         => $user->id,
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
  
    public function download($id){
       
        $myFile = StudentDocument::find($id);

    	return response()->download($myFile->document_url);
    }
    public function delete_document($id){
        StudentDocument::where('id', $id)->delete();
        return back()->with('success', trans('Deleted'));
    }
    public function getCourseDetails(Request $request){
        
        $invoice_details = StudentInvoice::with('courses')->where('payment_id',$request->payment_id)->where('course_id',$request->course_id)->get();

         $payment_details = PaymentRecord::where('payment_id',$request->payment_id)->where('student_invoice_id',$invoice_details[0]['id'])->get();
         $invoice_details[0]['payment_records'] = $payment_details;
        
        return json_encode($invoice_details);
    }
 
}
