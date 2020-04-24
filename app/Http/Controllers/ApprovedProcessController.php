<?php

namespace App\Http\Controllers;

use App\ApprovedProcess;
use App\ProcessCatagory;
use App\AssignedCatagory;
use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;
use Org_Heigl\Ghostscript\Ghostscript;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use mikehaertl\pdftk\Pdf1;
use Session;
use File;
use App\Helper;
class ApprovedProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $approvedprocesses=ApprovedProcess::all();

       

      
        return view('modules.approvedprocess.index',compact('approvedprocesses'));
    
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $processcatagories=ProcessCatagory::where('status', 1)
                                    ->orderBy('id', 'desc')
                                    ->get();
        $assignedcatagories=AssignedCatagory::where('status', 1)
                                    ->orderBy('id', 'desc')
                                    ->get();
        return view('modules.approvedprocess.upload',compact('processcatagories','assignedcatagories'));
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
                'assigned_catagory_id'=>'required',
                'process_catagory_id'=>'required',
                'circulation_date'=>'required',
                'version'=>'required',
                'name'=>'required|max:255|min:5',
                'approved_file'=>'required|mimes:doc,pdf,docx|max:1000',
                'signed_file'=>'required|mimes:doc,pdf,docx|max:1000',
                'working_file'=>'required|mimes:doc,pdf,docx|max:1000'
            ));



        $approvedprocess= new ApprovedProcess;

        $approvedprocess->process_catagory_id=$request->process_catagory_id;
        $approvedprocess->circulation_date=$request->circulation_date;
        $approvedprocess->version=$request->version;
        $approvedprocess->name=$request->name;
        

       

        if ($request->hasFile('approved_file')){
            $file= $request->file('approved_file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('approvedprocess-docs/approved_files/');
            $file->move($location,$filename);
            $approvedprocess->approved_file= $filename;
        }
        if ($request->hasFile('signed_file')){
            $file= $request->file('signed_file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('approvedprocess-docs/signed_files/');
            $file->move($location,$filename);
            $approvedprocess->signed_file= $filename;
        }
         if ($request->hasFile('working_file')){
            $file= $request->file('working_file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('approvedprocess-docs/working_files/');
            $file->move($location,$filename);
            $approvedprocess->working_file= $filename;
        }

        $approvedprocess->save();

        /*dd($request->assigned_catagory_id);*/

       

        $approvedprocess->assignedcatagories()->attach($request->assigned_catagory_id);


        Session::flash('success','Approved Process "'.$approvedprocess->name.'" has been Uploaded successfully');

        return redirect()->route('approvedprocess.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApprovedProcess  $approvedProcess
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $approvedprocess= ApprovedProcess::findorfail($id);

        return view('modules.approvedprocess.show',compact('approvedprocess'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApprovedProcess  $approvedProcess
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $approvedprocess = ApprovedProcess::findorfail($id);
        $processcatagories = ProcessCatagory::all();
        $assignedcatagories = AssignedCatagory::all();


        return view('modules.approvedprocess.edit',compact('approvedprocess','processcatagories','assignedcatagories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApprovedProcess  $approvedProcess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,array(
                'assigned_catagory_id'=>'required',
                'process_catagory_id'=>'required',
                'circulation_date'=>'required',
                'version'=>'required',
                'name'=>'required|max:255|min:5',
                'approved_file'=>'mimes:doc,pdf,docx|max:1000',
                'signed_file'=>'mimes:doc,pdf,docx|max:1000',
                'working_file'=>'mimes:doc,pdf,docx|max:1000'
            ));



        $approvedprocess= ApprovedProcess::findorfail($id);

        $approvedprocess->process_catagory_id=$request->process_catagory_id;
        $approvedprocess->circulation_date=$request->circulation_date;
        $approvedprocess->version=$request->version;
        $approvedprocess->name=$request->name;
        

       

        if ($request->hasFile('approved_file')){
            $file= $request->file('approved_file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('approvedprocess-docs/approved_files/');
            $file->move($location,$filename);
            $oldFilename=$approvedprocess->approved_file;
            File::delete('approvedprocess-docs/approved_files/'.$oldFilename);
            $approvedprocess->approved_file= $filename;
        }
        if ($request->hasFile('signed_file')){
            $file= $request->file('signed_file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('approvedprocess-docs/signed_files/');
            $file->move($location,$filename);
            $oldFilename=$approvedprocess->signed_file;
            File::delete('approvedprocess-docs/signed_files/'.$oldFilename);
            $approvedprocess->signed_file= $filename;
        }
         if ($request->hasFile('working_file')){
            $file= $request->file('working_file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('approvedprocess-docs/working_files/');
            $file->move($location,$filename);
            $oldFilename=$approvedprocess->working_file;
            File::delete('approvedprocess-docs/working_files/'.$oldFilename);
            $approvedprocess->working_file= $filename;
        }

        $approvedprocess->save();


        $approvedprocess->assignedcatagories()->detach( AssignedCatagory::all()->pluck('id') );
        $approvedprocess->assignedcatagories()->attach($request->assigned_catagory_id);


        Session::flash('success','Approved Process "'.$approvedprocess->name.'" has been Updated Successfully');

        return redirect()->route('approvedprocess.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApprovedProcess  $approvedProcess
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $approvedprocess=ApprovedProcess::findorfail($id);
        $approvedprocess1=$approvedprocess->name;
        $approvedprocess->delete();

        $oldFilename=$approvedprocess->approved_file;
        File::delete('approvedprocess-docs/approved_files/'.$oldFilename);

        $oldFilename=$approvedprocess->signed_file;
        File::delete('approvedprocess-docs/signed_files/'.$oldFilename);

        $oldFilename=$approvedprocess->working_file;
        File::delete('approvedprocess-docs/working_files/'.$oldFilename);



        Session::flash('danger','approved process "'.$approvedprocess1.'" has been Deleted');
        return redirect()->route('approvedprocess.index');
    }


    
}
