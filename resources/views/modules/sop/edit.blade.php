@extends('layouts.index')
@section('title','| Approved Process Upload')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Approved Process</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('approvedprocess.index')}}">List of Approved Process</a></li>
        </ol>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <section class="content">
    <form method="Post" action="{{route('approvedprocess.update',$approvedprocess->id)}}" enctype="multipart/form-data" >
      {{ method_field('PATCH') }}
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
            <div class="row" style="  margin-left: 80px">


              <div class="col-md-5 ">
                <div class="form-group">
                  <label>Assigned Group</label>
                  <select class="select2 " multiple="multiple" data-placeholder="Select a Group" name="assigned_catagory_id[]" style="width: 100%;" >
                    
                  @foreach($assignedcatagories as $assignedcatagory)
                   
                    @if(in_array($assignedcatagory->id, $approvedprocess->assignedcatagories->pluck('id')->toArray()))
                      <option value="{{$assignedcatagory->id}}" selected>{{$assignedcatagory->name}}</option>
                    @else
                      <option value="{{$assignedcatagory->id}}" >{{$assignedcatagory->name}}</option>
                    @endif

                      
                    @endforeach
                  </select>
                
                  {!! $errors->first('assigned_catagory_id', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-5 " >
                <div class="form-group">
                  <label>Catagory</label>
                  <select class="form-control select2" name="process_catagory_id" id="process_catagory_id" data-placeholder="Select a Catagory" style="width: 100%;" >
                    <option></option>

                    @foreach($processcatagories as $processcatagory)
                    <option value="{{$processcatagory->id}}" 
                    {{$approvedprocess->process_catagory_id==$processcatagory->id? 'selected':'' }}>
                    {{$processcatagory->name}}</option>
                    @endforeach
                  
                   
                  </select>
                  {!! $errors->first('process_catagory_id', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-md-1"></div>

              


              <div class="col-md-5">                    
               <div class="form-group">
                <label>Circulation Date</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="date"  class="form-control " name="circulation_date" value="{{$approvedprocess->circulation_date}}" > 
                </div> 
                {!! $errors->first('circulation_date', '<p class="error-message">:message</p>') !!}
              </div>
            </div>

            <div class="col-md-1"></div>


            <div class="col-md-5" >
              <div class="form-group">
                <label>Approved Process Version</label>
                <input class="form-control " name="version" style="width: 100%;" value="{{$approvedprocess->version}}" >
                {!! $errors->first('version', '<p class="error-message">:message</p>') !!}
              </div>
            </div>

            <div class="col-md-1"></div>


            <div class="col-md-11" >
              <div class=" form-group">  
                <label>Approved Process Name</label>
                <input class="form-control " name="name" style="width: 100%;" value="{{$approvedprocess->name}}" >
                {!! $errors->first('name', '<p class="error-message">:message</p>') !!}

              </div>
            </div>


            <div class="col-md-12 form-group" ><label><h3 style=" text-decoration: underline;">Upload Files:<h3></label>  </div> 


              <div class="col-md-3 form-group col-form-label text-md-center">
                <label>Approved File</label>
              </div>
              <div class="col-md-8 form-group" >
               <div class="custom-file">
                <input type="file" class="custom-file-input " id="inputGroupFile01" name="approved_file" accept=".doc,.pdf,.docx" value="{{$approvedprocess->approved_file}}">
                
                <label class="custom-file-label" for="inputGroupFile01">C{{$approvedprocess->approved_file}}</label>
                {!! $errors->first('approved_file', '<p class="error-message">:message</p>') !!}
              </div>
            </div>


            <div class="col-md-3 form-group col-form-label text-md-center">
              <label>Signed document</label>
            </div>
            <div class="col-md-8 form-group" >
             <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="signed_file" accept=".doc,.pdf,.docx" value="{{$approvedprocess->signed_file}}">
              
              <label class="custom-file-label" for="inputGroupFile01">{{$approvedprocess->signed_file}}</label>
              {!! $errors->first('signed_file', '<p class="error-message">:message</p>') !!}
            </div>
          </div>


          <div class="col-md-3 form-group col-form-label text-md-center">
            <label>Working document</label>
          </div>
          <div class="col-md-8 form-group" >
           <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="working_file" accept=".doc,.pdf,.docx" value="{{$approvedprocess->working_file}}"> 
           
            <label class="custom-file-label" for="inputGroupFile01">{{$approvedprocess->working_file}}</label>
             {!! $errors->first('working_file', '<p class="error-message">:message</p>') !!}
          </div>
        </div>



      {{--   <div class="col-md-10 offset-md-1">

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
</div>

</form>

</section>
</div>








@endsection

@push('scripts')

<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });

  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
 /* $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }

    })*/
  </script>
 

  <script type="application/javascript">
    $('input[id="inputGroupFile01"]').change(function(e){
      var fileName = e.target.files[0].name;
      $(this).next('.custom-file-label').html(fileName);
    });
  </script>




  @endpush