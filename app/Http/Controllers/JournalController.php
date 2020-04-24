<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;
use Image;
use Response;
use Purifier;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Helper;
use App\Filemanage;
use DB;
use File;
class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals=Journal::all();  
        return view('modules.journal.index',compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.journal.upload');
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
                'name'=>'required|max:255|min:5',
                'description'=>'required',
                'image'=>'required|image|max:10000',
                'file'=>'required|mimes:doc,pdf,docx|max:1000'
            ));

        $journal= new Journal;
      
        $journal->name=$request->name;
        $journal->description=Purifier::clean($request->description);
       
        if ($request->hasFile('image')){
            $image= $request->file('image');
          
            $filename = uniqid().'.'.$image->getClientOriginalName();
            $location = public_path('journal-docs/images/'.$filename);
            Image::make($image)->resize(null,500,function ($constraint) {
            $constraint->aspectRatio();
            })->save($location); 
            /*$image->move($location,$filename);*/
            $journal->image= $filename;
        }
        

        if ($request->hasFile('file')){
            $file= $request->file('file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('journal-docs/files/');
            $file->move($location,$filename);
            $journal->file= $filename;

            $pdfpath=public_path("/journal-docs/files/".$journal->file);
            $journalName=$request->name;

            $imageNames=Helper::foo($pdfpath,$journalName,'/journal-docs/fileimages/');

            
        }

        $journal->save();

        $filemanage = new Filemanage;

        $NoOfImages=count($imageNames);
        

         for($count=1; $count<=$NoOfImages; $count++)
         {
            $filemanage = new Filemanage;
            $filemanage->file_name=$imageNames[$count-1];
            $filemanage->journal_id = $journal->id;
            $filemanage->save();
         } 
         
      

        Session::flash('success','Journal "'.$journal->name.'" has been Uploaded successfully');

        return redirect()->route('journal.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal= Journal::findorfail($id);
        return view('modules.journal.edit',compact('journal'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,array(
                'name'=>'required|max:255|min:5',
                'description'=>'required',
                'image'=>'image|max:10000',
                'file'=>'mimes:doc,pdf,docx|max:1000'
            ));

        $journal= Journal::findorfail($id);
      
        $journal->name=$request->name;
        $journal->description=$request->description;
       
        if ($request->hasFile('image')){
            $image= $request->file('image');
          
            $filename = uniqid().'.'.$image->getClientOriginalName();
            $location = public_path('journal-docs/images/'.$filename);
            Image::make($image)->resize(null,500,function ($constraint) {
            $constraint->aspectRatio();
            })->save($location); 

            $oldFilename=$journal->image;
            File::delete('journal-docs/images/'.$oldFilename);
            $journal->image= $filename;
        }

        if ($request->hasFile('file'))
        {
            $file= $request->file('file');
            $filename = uniqid().'.'.$file->getClientOriginalName();
            $location = public_path('journal-docs/files/');
            $file->move($location,$filename);

            $oldFilename=$journal->file;
            File::delete('journal-docs/files/'.$oldFilename);
            $journal->file= $filename;

            $pdfpath=public_path("/journal-docs/files/".$journal->file);
            $journalName=$request->name;
            $imageNames=Helper::foo($pdfpath,$journalName);

       }

        $journal->save();

        if ($request->hasFile('file'))
        {    
            $filemanages= DB::table('filemanages')
                        ->where('journal_id','=',$journal->id)
                        ->get();              

            foreach ($filemanages as $filemanage) 
                {
                    File::delete('journal-docs/fileimages/'.$filemanage->file_name);
                }

            DB::table('filemanages')
                        ->where('journal_id','=',$journal->id)
                        ->delete();

            $filemanage = new Filemanage;
            $NoOfImages=count($imageNames);

            for($count=1; $count<=$NoOfImages; $count++)
                {
                    $filemanage = new Filemanage;
                    $filemanage->file_name=$imageNames[$count-1];
                    $filemanage->journal_id = $journal->id;
                    $filemanage->save();
                } 
         }

        Session::flash('success','Journal "'.$journal->name.'" has been Edited Successfully');

        return redirect()->route('journal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal=Journal::findorfail($id);

        $oldFilename=$journal->file;
        File::delete('journal-docs/files/'.$oldFilename);

        $oldFilename=$journal->image;
        File::delete('journal-docs/images/'.$oldFilename);

        $filemanages= DB::table('filemanages')
                        ->where('journal_id','=',$journal->id)
                        ->get();              
        foreach ($filemanages as $filemanage) 
        {
            File::delete('journal-docs/fileimages/'.$filemanage->file_name);
        }
        DB::table('filemanages')
                ->where('journal_id','=',$journal->id)
                ->delete();
        $journalname=$journal->name;
        $journal->delete();

        Session::flash('danger','Journal "'.$journalname.'" has been Deleted');
        return redirect()->route('journal.index');
    }

    public function download($id)
    {
        $journal= Journal::findorfail($id);
        $file=public_path()."/journal-docs/files/".$journal->file;
        $headers = array('Content-Type: application/pdf,Content-Type: application/doc');
        return Response::download($file,$journal->file,$headers); 
    }


    public function downloadview($id)
    {
        $journal= Journal::findorfail($id);
        $filemanages= DB::table('filemanages')
                    ->where('journal_id','=',$id)
                    ->get();
        return view('modules.journal.file_viewer',compact('filemanages','journal'));
    }

}
