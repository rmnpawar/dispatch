<?php

namespace App\Http\Controllers;

use App\dispatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;


class DispatchController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $dd = DB::select('select * from dispatches where recepient = '.$id.' and received is null');
        
        return view('index')->with('dds',$dd);
    }
    public function dispose()
    {
        $id = Auth::id();
        $disposables  = dispatch::all()->where('recepient',$id);
        return view('dispose')->with('disposables',$disposables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::select('select id,name from users');
        return view('add')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $entry = new dispatch();
        $entry->dak_id = Input::post('dak_id');
        $entry->letter_no = Input::post('letter_no');
        $entry->dateofletter = Input::post('dateofletter');
        $entry->section = Input::post('section');
        $entry->subject = Input::post('subject');
        $entry->from = Input::post('from');
        $entry->description = Input::post('description');
        $entry->file_id = Input::post('file_id');
        $entry->dateinsection = Input::post('dateinsection');
        $entry->recepient = Input::post('recepient');
        $entry->language = Input::post('language');
        $entry->save();
        return redirect('/add')->with('message','Entry Successfully posted');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected = dispatch::find($id);
        $selected->received = 1;
        $selected->datereceived = today();
        $selected->save();
        return redirect('/dispatch');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function edit(dispatch $dispatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $selected = dispatch::find($id);
        $selected->received = 1;
        $selected->datereceived = today();
        $selected->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(dispatch $dispatch)
    {
        //
    }
}
