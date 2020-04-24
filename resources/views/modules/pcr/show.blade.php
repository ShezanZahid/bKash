@extends('layouts.index')
@section('title','| pcrs')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="row mb-3">
      <div class="col-sm-6">
        <h1>Process Chnage Request(PCR)</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('pcr.index')}}">List of PCRs</a></li>
        </ol>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <section class="content">
   <div class="container-fluid">
    <!-- SELECT3 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="font-size:25px ">Mobile Number Change Process</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
        </div>
      </div>


      <div class="card-body">
        <div class="row" >
          <div class="col-md-4 ">
            <div class="form-group" style="text-align: right;">
              <label>Depertment :</label>
            </div>
          </div>
          <div class="col-md-8 ">
            <div class="form-group">
              {{$pcr->depertment_id }}
            </div>
          </div>


          <div class="col-md-4 " style="text-align: right;">
            <div class="form-group">
              <label>Name of the Stakeholder request change :</label>
            </div>
          </div>
          <div class="col-md-8 ">
            <div class="form-group">
              {{$pcr->stakeholder_name}}
            </div>
          </div>


          <div class="col-md-4 " style="text-align: right;">
            <div class="form-group">
              <label>Contact Number of Stakeholder :</label>
            </div>
          </div>
          <div class="col-md-8 ">
            <div class="form-group">
             {{$pcr->stakeholder_number}}
           </div>
         </div>


         <div class="col-md-4 " style="text-align: right;">
          <div class="form-group">
            <label>Tyep of Request :</label>
          </div>
        </div>
        <div class="col-md-8 ">
          <div class="form-group">
           {{$pcr->request_type}}
         </div>
       </div>

       <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>Request Submission Date :</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->submission_date}}
        </div>
      </div>

      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>Change Requeted by :</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->request_by_date}}
        </div>
      </div>


      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>Urgency :</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->urgency==1? 'High':'Low'}}
        </div>
      </div>

      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>Name of the Process Need to be changed :</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->process_name}}
        </div>
      </div>

      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>Objective of Change :</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->change_objective}}
        </div>
      </div>


      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>Approval Status :</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->approval_status==1? 'Approved':($pcr->approval_status==0?'Rejected':'Not checked yet')}}
        </div>
      </div>







      @if($pcr->approval_status==1 || $pcr->approval_status==0)

      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>CPM Comment:</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          {{$pcr->cpm_remarks}}
        </div>
      </div>

      @else


      <div class="col-md-4 " style="text-align: right;">
        <div class="form-group">
          <label>CPM Comment:</label>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="form-group">
          <textarea class="first form-control " placeholder="write the reason here" name="cpm_remark" ></textarea>
        </div>
      </div>

      <div class="col-md-6 form-group">
        <form method="Post" action="{{route('pcr.approval',$pcr->id)}}" >
         @csrf
         <input type="hidden" name="_method" value="PATCH">

         <input type="hidden" class="second" placeholder="write the reason here" name="cpm_remarks" ></input>
         <button type="submit" class="btn btn-block btn-success btn-sm" style="width: 80%; margin:0 auto; ">Approved</button>
       </form> 
     </div>

     <div class="col-sm-6 form-group">

      <form method="Post" action="{{route('pcr.reject',$pcr->id)}}" >
       @csrf
       <input type="hidden" name="_method" value="PATCH">

       <input type="hidden" class="second" placeholder="write the reason here" name="cpm_remarks" ></input>
       <button type="submit" class="btn btn-block btn-danger btn-sm" style="width: 80%; margin:0 auto; ">Rejeted</button>
     </form>

  

  </div>


 </div>

 @endif

</div>




</div>
</div>
</div>
</div>
</section>
</div>


@endsection

@push('scripts')

<script type="text/javascript">

  $(".first").on('keyup',function(){
    $(".second").val($(this).val());
});

</script>


<script type="text/javascript">
if(!!window.performance && window.performance.navigation.type === 2)
{
    console.log('Reloading');
    window.location.reload();
}
</script>


@endpush