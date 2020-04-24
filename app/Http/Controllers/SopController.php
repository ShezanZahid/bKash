<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sop;

use Spatie\PdfToImage\Pdf;
use Org_Heigl\Ghostscript\Ghostscript;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use mikehaertl\pdftk\Pdf1;
use App\Sopfilemanager;
use Session;
use File;
use Purifier;
use App\Helper;

class SopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sops=Sop::all();
      
        return view('modules.sop.index',compact('sops'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.sop.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* 
        $this->validate($request,array(
                'sop_catagory_id'=>'required|max:255|min:5',
                'description'=>'required',
                'image'=>'required|image|max:10000',
                'file'=>'required|mimes:doc,pdf,docx|max:1000'
            ));*/

        $sop= new sop;
      
        $sop->sop_catagory_id=$request->sop_catagory_id;
        $sop->sop_subcatagory_id=$request->sop_subcatagory_id;
        $sop->sop_type_id=$request->sop_type_id;
        $sop->service_type_id=$request->service_type_id;
        $sop->execution=$request->execution;
        $sop->sla=$request->sla;
        $sop->frequently_used=$request->frequently_used;
        
        $sop->communication=Purifier::clean($request->communication);
       
      
        

        if ($request->hasFile('file')){
            $file= $request->file('file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('sop-docs/files/');
            $file->move($location,$filename);
            $sop->file= $filename;

            $pdfpath=public_path("/sop-docs/files/".$sop->file);
            $sopName=$request->name;

            $imageNames=Helper::foo($pdfpath,$sopName,'/sop-docs/fileimages/');

            
        }

        $sop->save();

        $filemanage = new Sopfilemanager;

        $NoOfImages=count($imageNames);
        

         for($count=1; $count<=$NoOfImages; $count++)
         {
            $filemanage = new Sopfilemanager;
            $filemanage->file_name=$imageNames[$count-1];
            $filemanage->sop_id = $sop->id;
            $filemanage->save();
         } 
         
         $sop->assignedcatagories()->attach($request->assigned_catagory_id);
      

        Session::flash('success','sop "'.$sop->sop_catagory_id.'" has been Uploaded successfully');

        return redirect()->route('sop.index');
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
}
