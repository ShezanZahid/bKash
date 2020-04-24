<?php

namespace App\Http\Controllers;

use App\AssignedCatagory;
use Illuminate\Http\Request;
use Session;

class AssignedCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignedcatagories= AssignedCatagory::all();
        return view('dropdowndata.assigned_catagories',compact('assignedcatagories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignedcatagories= AssignedCatagory::all();

        return view('dropdowndata.assigned_catagories',compact('assignedcatagories'));
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

        $assignedcatagory= new AssignedCatagory;
        $assignedcatagory->name=$request->name;
        $assignedcatagory->status=$request->status;

        $assignedcatagory->save();

        

        Session::flash('success','assignedcatagory "'.$assignedcatagory->name.'" has been Added successfully');

        return redirect()->route('assignedcatagory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AssignedCatagory  $assignedCatagory
     * @return \Illuminate\Http\Response
     */
    public function show(AssignedCatagory $assignedCatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AssignedCatagory  $assignedCatagory
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignedCatagory $assignedCatagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AssignedCatagory  $assignedCatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignedCatagory $assignedCatagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AssignedCatagory  $assignedCatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignedcatagory=AssignedCatagory::findorfail($id);
        $assignedcatagory1=$assignedcatagory->name;
        $assignedcatagory->delete();

        Session::flash('danger','Assigned Group Catagory"'.$assignedcatagory1.'" has been Deleted');
        return redirect()->route('assignedcatagory.index');
    }

    public function status_control($id)
    {
            
        $assignedcatagory=AssignedCatagory::find($id);
        
        if($assignedcatagory->status==1)
            {
                $assignedcatagory->status=0;
            }
        else
            {
                $assignedcatagory->status=1;
            }  

        $assignedcatagory->save();
        return redirect()->route('assignedcatagory.index') ;          
    }
}
