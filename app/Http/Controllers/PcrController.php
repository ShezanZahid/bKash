<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pcr;
use Session;

class PcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcrs=Pcr::all();

        return view('modules.pcr.indexuser',compact('pcrs'));
    }

      public function indexAdmin()
    {
        $pcrs=Pcr::all();

        return view('modules.pcr.index',compact('pcrs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.pcr.request');
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
                'depertment_id'=>'required',
                'stakeholder_name'=>'required',
                'stakeholder_number'=>'required',
                'request_type'=>'required',
                'submission_date'=>'required',
                'request_by_date'=>'required',
                'urgency'=>'required',
                'process_name'=>'required_without:process_name1',
                'process_name1'=>'required_without:process_name',
                
            ));



        $pcr= new pcr;

        $pcr->depertment_id=$request->depertment_id;
        $pcr->stakeholder_name=$request->stakeholder_name;
        $pcr->stakeholder_number=$request->stakeholder_number;
        $pcr->request_type=$request->request_type;
        $pcr->submission_date=$request->submission_date;
        $pcr->request_by_date=$request->request_by_date;
        $pcr->urgency=$request->urgency;

        if($request->request_type=='new')
        {
            $pcr->process_name=$request->process_name;
            
        }
         if($request->request_type=='modify')
        {
            $pcr->process_name=$request->process_name1;
            $pcr->process_version=$request->process_version;
        }
         if($request->request_type=='delete')
        {
            $pcr->process_name=$request->process_name1;
            $pcr->process_version=$request->process_version;
        }

        

        $pcr->change_objective=$request->change_objective;

        $pcr->approval_status=3;

        

        $pcr->save();


        Session::flash('success','"'.$pcr->process_name.'"Process" has been submitted');

        return redirect()->route('pcr.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $pcr=Pcr::findorfail($id);
        
        return view('modules.pcr.show',compact('pcr'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vc  $vc
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
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approval(Request $request,$id)
    {
       
        $pcr= Pcr::findorfail($id);
       
        
        $pcr->cpm_remarks=$request->cpm_remarks;
        $pcr->approval_status=1;
        $pcr->save();

        Session::flash('success','"'.$pcr->process_name.'"Process" has been Approved');

        return redirect()->route('pcr.index');
    }

     public function reject(Request $request,$id)
    {
        $pcr= Pcr::findorfail($id);
      
        $pcr->cpm_remarks=$request->cpm_remarks;
        $pcr->approval_status=0;
        $pcr->save();

        Session::flash('success','"'.$pcr->process_name.'"Process" has been Rejected');

        return redirect()->route('pcr.index');
        
    }
}
