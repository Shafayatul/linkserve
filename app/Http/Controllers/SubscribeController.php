<?php

namespace App\Http\Controllers;
use App\Subscribe;
use Illuminate\Http\Request;
use Session;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // admin only
    public function index()
    {
        $subscribes = Subscribe::get();
        return view('admin.subscribe.index')->with(['subscribes'=>$subscribes]);  
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

        $validator = $this->validate($request, [
            'email' => 'required|unique:subscribes|email'
        ]);
        $subscribe = new Subscribe;
        $subscribe->email = $request->email;            
        $subscribe->save();
        return response()->json([ 'success'=> 'You have successfully subscribed' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajaxRequestPost()

    {

        $input = request()->all();

        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }

}
