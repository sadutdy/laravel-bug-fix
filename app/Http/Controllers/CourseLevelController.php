<?php

namespace App\Http\Controllers;

//use App\CourseLevel;
use App\CourseLevel;
use App\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseLevelController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $title = "Discounts";

        if ($request->bulk_action_btn){
            if(config('app.is_demo')) return back()->with('error', __a('demo_restriction'));
        }
       
        $user = Auth::user();
       if ( $user->isAdmin()){
           $discounts = CourseLevel::all();
           print_($discounts);die;
       }

   //  $discounts = CourseLevel::with('course')->orderBy('created_at', 'desc')->paginate(25);

        return view('admin.discounts', compact('title', 'discounts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseLevel $courseLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseLevel $courseLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseLevel $courseLevel)
    {
        //
    }
}
