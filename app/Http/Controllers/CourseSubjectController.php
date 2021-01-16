<?php

namespace App\Http\Controllers;

use App\course_subject;
use App\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseSubjectController extends Controller
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
            'course_id'         => clean_html($request->unit_course),
            'unit_no'           => $request->unit_no,
            'subject_name'            => $request->unit_subject,
            'TQT'            => $request->unit_TQT,
            'credit'            => $request->unit_credit,
            'unit_description'          => $request->unit_description,
        ];
      
        Course_subject::create($data);

        

        return back()->with('success', trans('Successfully Added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\course_subject  $course_subject
     * @return \Illuminate\Http\Response
     */
    public function show(course_subject $course_subject,Request $request)
    {
        $title = "Course Units";

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
            Course_subject::whereIn('id', $request->bulk_ids)->delete();
            return back();
        }




        $user = Auth::user();
       if ( $user->isAdmin()){
           $units = Course_subject::all();
       }

     $units = Course_subject::with('course')->orderBy('created_at', 'desc')->paginate(25);
     $courses = Course::get();
  
        return view('admin.units', compact('title', 'units','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course_subject  $course_subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $units = Course_subject::find($request->id);
        if(!empty($units))
        {
            $course = Course::find($units['course_id']);
            echo $units['id']."--".$units['course_id']."--".$units['unit_no']."--".$units['subject_name']."--".$units['unit_description']."--".$units['TQT']."--".$units['credit'];
        }
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\course_subject  $course_subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course_subject $course_subject)
    {
        $units = Course_subject::find($request->aid);
      
        $data = [
            'course_id'         => clean_html($request->edit_course_name),
            'unit_no'           => $request->edit_unit_no,
            'subject_name'            => $request->edit_subject_name,
            'TQT'            => $request->edit_TQT,
            'credit'            => $request->edit_credit,
            'unit_description'          => $request->edit_description,

          
        ];
      //  print_R($data);die;

        Course_subject::where('id', $request->aid)->update($data);

        return back()->with('success', trans('Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course_subject  $course_subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(config('app.is_demo')) return back()->with('error', __a('demo_restriction'));

        if ($request->id){
            Course_subject::where('id', $request->id)->delete();
            return back()->with('success', trans('Deleted'));
        }
        return back()->with('success', trans('Deleted'));
      
    }
}
