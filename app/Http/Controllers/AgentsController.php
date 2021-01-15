<?php

namespace App\Http\Controllers;

use App\agents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentsController extends Controller
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
            'name'         => clean_html($request->agent_name),
            'email'           => $request->email,
            'contact'            => $request->phone,
            'other'          => $request->other,
        ];
        Agents::create($data);

        return back()->with('success', trans('Successfully Added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function show(agents $agents,Request $request)
    {
      
        $title = "Agents";

        $user = Auth::user();
       if ( $user->isAdmin()){
           $agents = Agents::all();
       }

     $agents = Agents::orderBy('created_at', 'desc')->paginate(25);
               
        return view('admin.agents', compact('title', 'agents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $agents = Agents::find($request->id);
     if(!empty($agents))
     {
         echo $agents['id']."--".$agents['name']."--".$agents['email']."--".$agents['contact']."--".$agents['other'];
     }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
        $agents = Agents::find($request->aid);
      
        $data = [
            'name'         => clean_html($request->agent_name1),
            'email'           => $request->email1,
            'contact'            => $request->phone1,
            'other'          => $request->other1,
        ];

        Agents::where('id', $request->aid)->update($data);

        return back()->with('success', trans('Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(config('app.is_demo')) return back()->with('error', __a('demo_restriction'));

        if ($request->id){
            Agents::where('id', $request->id)->delete();
            return back()->with('success', trans('Deleted'));
        }
        return back()->with('success', trans('Deleted'));
      
    }
}
