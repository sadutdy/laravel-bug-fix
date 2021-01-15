<?php

namespace App\Http\Controllers;

use App\discounts;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DiscountsController extends Controller
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
     * @param  \App\discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,discounts $discounts)
    {
        $title = "Discounts";

        $user = Auth::user();
       if ( $user->isAdmin()){
           $discounts = Discounts::all();
       }
     $discounts = Discounts::orderBy('created_at', 'desc')->paginate(25);
 
        return view('admin.discounts', compact('title', 'discounts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        $discounts = Discounts::find($request->id);
        $data = [
            'one_time_discount'         => clean_html($request->onetime),
            'monthly_discount'           => $request->monthly,
        ];

        Discounts::where('id', $request->id)->update($data);

        return back()->with('success', trans('Updated'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, discounts $discounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(discounts $discounts)
    {
        //
    }
}
