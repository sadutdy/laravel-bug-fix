<?php

namespace App\Http\Controllers;

use App\leads;
use App\LeadStatus;
use App\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'fname'         => clean_html($request->l_fname),
            'lname'           => $request->l_lname,
            'email'            => $request->l_email,
            'phone'          => $request->l_phone,
            'course'           => $request->l_course,
            'aw_body'            => $request->awarding_body,
            'source'          => $request->l_sourse,
            'manager'            => $request->l_manager,
            'l_status'          => $request->l_status,
            'message'           => $request->message,
            'date'            => $request->l_date,
            'follow_up'          => $request->follow_up,
        ];
        Leads::create($data);

        return back()->with('success', trans('Successfully Added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->bulk_action_btn){
            if(config('app.is_demo')) return back()->with('error', __a('demo_restriction'));
        }
       

        // if ($request->bulk_action_btn === 'update_status' && $request->update_status){
        // if($request->bulk_ids==''){
        //     return back();
        // }
        //      Leads::whereIn('id', $request->bulk_ids)->update(['l_status' => $request->update_status,'manager' => Auth::user()->name]);
        //       return back();
        // }
        if ($request->bulk_action_btn === 'delete'){
            if($request->bulk_ids==''){
                return back();
            }
            Leads::whereIn('id', $request->bulk_ids)->delete();
            return back();
        }

      
       
        $title = "Leads";

        $user = Auth::user();
       if ( $user->isAdmin()){
           $leads = Leads::with('course_details')->get();
       }

    if ($request->status){
            if ($request->status !== 'all'){
            $leads = Leads::with('course_details')->where('l_status', $request->status)->paginate(25);
            
            }else{
            $leads = Leads::with('course_details')->orderBy('created_at', 'desc')->paginate(25);
            }
     }else{
            $leads = Leads::with('course_details')->paginate(25);
        
     }

     $courses = Course::orderBy('awarding_body', 'ASC')->get();

   
     //$lead_status = LeadStatus::find(1);

        return view('admin.leads', compact('title', 'leads','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $leads = Leads::find($request->id);
      
        $data = [
            'l_status'         => $request->status,
        ];

        Leads::where('id', $request->lid)->update($data);

       echo "success";
   
    }
    public function edit_manager(Request $request){
        $leads = Leads::find($request->id);
      
        $data = [
            'manager'         => $request->manager,
        ];

        Leads::where('id', $request->lid)->update($data);

       echo "success";
    }
    public function edit_follow(Request $request){
        $leads = Leads::find($request->id);
      
        $data = [
            'follow_up' => $request->follow_up,
        ];

        Leads::where('id', $request->lid)->update($data);

       echo "success";
    }
    public function edit_notes(Request $request){
        $leads = Leads::find($request->id);
      
        $data = [
            'notes' => $request->notes,
        ];

        Leads::where('id', $request->lid)->update($data);

       echo "success";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leads $leads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function destroy(leads $leads)
    {
        //
    }
}
