<?php

namespace App\Http\Controllers;

use App\ProcessCatagory;
use Illuminate\Http\Request;
use Session;

class ProcessCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processcatagories= ProcessCatagory::all();
        return view('dropdowndata.process_catagories',compact('processcatagories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $processcatagories= ProcessCatagory::all();

        return view('dropdowndata.process_catagories',compact('processcatagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
                'name'=>'required|max:255|min:3',
            ));

        $processcatagory= new ProcessCatagory;
        $processcatagory->name=$request->name;
        $processcatagory->status=$request->status;

        $processcatagory->save();

        Session::flash('success','processcatagory "'.$processcatagory->name.'" has been Added successfully');

        return redirect()->route('processcatagory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProcessCatagory  $processCatagory
     * @return \Illuminate\Http\Response
     */
    public function show(ProcessCatagory $processCatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProcessCatagory  $processCatagory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProcessCatagory $processCatagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProcessCatagory  $processCatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcessCatagory $processCatagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProcessCatagory  $processCatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $processcatagory=ProcessCatagory::findorfail($id);
        $processcatagory1=$processcatagory->name;
        $processcatagory->delete();

        Session::flash('success','processcatagory "'.$processcatagory->name.'" has been Edited Successfully');
        return redirect()->route('processcatagory.index');
    }

    public function status_control($id)
    {
            
        $processcatagory=ProcessCatagory::find($id);
        
        if($processcatagory->status==1)
            {
                $processcatagory->status=0;
            }
        else
            {
                $processcatagory->status=1;
            }  

        $processcatagory->save();
        return redirect()->route('processcatagory.index') ;          
    }
}
