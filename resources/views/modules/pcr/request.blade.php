@extends('layouts.index')
@section('title','| Process Change Request')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Process Change Request</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('pcr.index')}}">List of Process Change Request</a></li>
        </ol>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <section class="content">
    <form method="Post" action="{{route('pcr.store')}}"  >
      @csrf
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="row" style="margin-left: 80px">


              <div class="col-sm-5">
                <div class="form-group">
                  <label>Name of the Depertment</label>
                  <input class="form-control " name="depertment_id" style="width: 100%;" value="{{old('depertment_id')}}" >
                  {!! $errors->first('depertment_id', '<p class="error-message">:message</p>') !!}
                </div>
              </div>


              <div class="col-sm-1"></div>

              <div class="col-sm-5">
                <div class="form-group">
                  <label>Name of the Stakeholder request change</label>
                  <input class="form-control " name="stakeholder_name" style="width: 100%;" value="{{old('stakeholder_name')}}" >
                  {!! $errors->first('stakeholder_name', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-sm-1"></div>

              <div class="col-sm-5">
                <div class="form-group">
                  <label>Contact Number of Stakeholder</label>
                  <input class="form-control " name="stakeholder_number" style="width: 100%;" value="{{old('stakeholder_number')}}" >
                  {!! $errors->first('stakeholder_number', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-sm-1"></div>

              <div class="col-sm-5">
                <div class="form-group">
                  <label>Request Submission Date</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date"  class="form-control " name="submission_date" value="{{old('submission_date')}}" > 
                  </div> 
                  {!! $errors->first('submission_date', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-sm-1"></div>


                <div class="col-sm-5">
                  <div class="form-group">
                    <label>Change Requeted by</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="date"  class="form-control " name="request_by_date" value="{{old('request_by_date')}}" > 
                    </div> 
                    {!! $errors->first('request_by_date', '<p class="error-message">:message</p>') !!}
                  </div>
                </div>

              <div class="col-sm-1"></div>

              <div class="col-sm-5" style="margin-top: 10px">
                <div class="form-group" style="margin-top: 25px">
                  <label>Select Urgency</label>
                  <input type="hidden"  name="urgency" value="0" />
                  <div class="icheck-danger d-inline" style="margin-left: 10px">
                    <input type="checkbox" id="checkboxPrimary1" name="urgency" value="1">
                    <label for="checkboxPrimary1">
                    </label>
                  </div>
                 {{--  <input type="Choose" class="form-control " name="urgency" style="width: 100%;" value="{{old('urgency')}}" >
                 {!! $errors->first('urgency', '<p class="error-message">:message</p>') !!} --}}
               </div>
             </div>

             <div class="col-sm-1"></div>



             <div class="col-sm-5" style="margin-top: 10px; margin-bottom: 20px">
              <label>Type of Request</label>
                  
                  
               

                  

                  <div class="icheck-danger d-inline col-sm-3">
                    <input type="radio" id="radioPrimary1" name="request_type" onchange="getValue(this)" value="new" >
                    <label for="radioPrimary1">
                      New
                    </label>
                  </div>
                  <div class="icheck-danger d-inline col-sm-3">
                    <input type="radio" id="radioPrimary2" name="request_type" onchange="getValue(this)" value="modify">
                    <label for="radioPrimary2">
                      Modify
                    </label>
                  </div>
                  <div class="icheck-danger d-inline col-sm-3">
                    <input type="radio" id="radioPrimary3" name="request_type" onchange="getValue(this)" value="delete">
                    <label for="radioPrimary3">
                      Delete
                    </label>
                  </div>              
                </div>
                <div class="col-sm-6" style="margin-top: 10px; margin-bottom: 20px">
                {!! $errors->first('request_type', '<p class="error-message">:message</p>') !!}
              </div>

              
                

                

                <div class="col-sm-5">
                  <div class="form-group" id="process_name" style="display: none;">
                    <label>Name of the Process Need to be changed</label>
                    <input class="form-control " name="process_name" id="process_name" style="width: 100%;" value="{{old('process_name')}}" > 
                    {!! $errors->first('process_name', '<p class="error-message">:message</p>') !!}
                  </div>
                </div>

                 <div class="col-sm-1"></div>
                 <div class="col-sm-6"></div>

                <div class="col-sm-5">
                  <div class="form-group" id="process_name_dd" style="display: none;">
                <label >Name of the Process Need to be Added</label>

                  <select class="form-control"  name="process_name1">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="Process 1">Process 1</option>
                    <option value="Process 2">Process 2</option>
                    <option value="Process 3">Process 3</option>
                    <option value="Process 4">Process 4</option>
                  </select>
                  {!! $errors->first('process_name1', '<p class="error-message">:message</p>') !!}
                </div>
              </div>


                <div class="col-sm-1"></div>
                

                <div class="col-sm-5">
                  <div class="form-group" id="process_version" style="display: none">
                    <label>Process Version</label>
                    <input class="form-control " name="process_version"  style="width: 100%;" value="{{old('process_version')}}" >
                    {!! $errors->first('process_version', '<p class="error-message">:message</p>') !!}
                  </div>
                </div>

               
                 


                <div class="col-sm-1"></div>

                <div class="col-sm-11">
                  <div class="form-group">
                    <label>Objective of Change</label>
                    <TEXTAREA class="form-control " name="change_objective" style="width: 100%;" > {{old('change_objective')}} </TEXTAREA> 
                    {!! $errors->first('change_objective', '<p class="error-message">:message</p>') !!}
                  </div>
                </div>


       {{--  <div class="col-md-10 offset-md-1">

          @if($errors->any())
          
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>
                {{$error}}
              </li>
              @endforeach
            </ul>
          </div>
          @endif
        </div> --}}

        <div class="col-md-5 form-group"></div>

        <div class="col-md-4 offset-md-2 form-group">

          <button type="submit" class="btn-primary btn-sm" style="width: 100%;"><b>Submit</b></button>

        </div>




      </div>
    </div>
  </div>

</form>

</section>
</div>








@endsection

@push('scripts')

<script type="text/javascript">
function getValue(x) {
  if(x.value == 'new'){
    document.getElementById("process_name").style.display = 'block';
    document.getElementById("process_version").style.display = 'none';
    document.getElementById("process_name_dd").style.display = 'none'; // you need a identifier for changes
  }
  if((x.value == 'modify')){
    document.getElementById("process_name").value = '1';
    document.getElementById("process_name").style.display = 'none';
    document.getElementById("process_version").style.display = 'block';
    document.getElementById("process_name_dd").style.display = 'block';
  }
  if((x.value == 'delete')){
    document.getElementById("process_name").value = '1';
    document.getElementById("process_name").style.display = 'none';
    document.getElementById("process_version").style.display = 'block';
    document.getElementById("process_name_dd").style.display= 'block';  // you need a identifier for changes
  }
}
</script>






  @endpush