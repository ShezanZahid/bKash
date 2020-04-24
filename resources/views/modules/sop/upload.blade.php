@extends('layouts.index')
@section('title','| SOP Upload')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Standard Operational Procedure</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('sop.index')}}">List of SOP</a></li>
        </ol>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <section class="content">
    <form method="Post" action="{{route('sop.store')}}" enctype="multipart/form-data" >
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
                  <label>Catagory</label>
                   <select class="form-control select2" name="sop_catagory_id" id="sop_catagory_id" data-placeholder="Select a Catagory" style="width: 100%;" >
                    <option disabled selected value> -- select an option -- </option>
                    <option value=" 1"> 1</option>
                    <option value=" 2"> 2</option>
                    <option value=" 3"> 3</option>
                    <option value=" 4"> 4</option>
                  </select>

                 {{-- {{ dd($errors)}} --}}
                  {!! $errors->first('sop_catagory_id', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-5 " >
                <div class="form-group">
                  <label>Subcatagory</label>
                   <select class="form-control select2" name="sop_subcatagory_id" id="sop_subcatagory_id" data-placeholder="Select a Catagory" style="width: 100%;" >
                    <option disabled selected value> -- select an option -- </option>
                    <option value=" 1"> 1</option>
                    <option value=" 2"> 2</option>
                    <option value=" 3"> 3</option>
                    <option value=" 4"> 4</option>
                  </select>
                  {!! $errors->first('sop_subcatagory_id', '<p class="error-message">:message</p>') !!}
                </div>
              </div>

              <div class="col-md-1"></div>

              


              <div class="col-md-5">                    
               <div class="form-group">
                <label>Type</label>
                 <select class="form-control select2" name="sop_type_id" id="sop_type" data-placeholder="Select a Catagory" style="width: 100%;" >
                    <option disabled selected value> -- select an option -- </option>
                    <option value=" 1"> 1</option>
                    <option value=" 2"> 2</option>
                    <option value=" 3"> 3</option>
                    <option value=" 4"> 4</option>
                  </select>
                {!! $errors->first('sop_type_id', '<p class="error-message">:message</p>') !!}
              </div>
            </div>

            <div class="col-md-1"></div>


            <div class="col-md-5" >
              <div class="form-group">
                <label>Service Type</label>
                 <select class="form-control select2" name="service_type_id" id="service_type" data-placeholder="Select a Catagory" style="width: 100%;" >
                    <option disabled selected value> -- select an option -- </option>
                    <option value=" 1"> 1</option>
                    <option value=" 2"> 2</option>
                    <option value=" 3"> 3</option>
                    <option value=" 4"> 4</option>
                  </select>
                {!! $errors->first('service_type_id', '<p class="error-message">:message</p>') !!}
              </div>
            </div>

            <div class="col-md-1"></div>


            <div class="col-md-5" >
              <div class=" form-group">  
                <label>Assigned Group</label>
                <select class="select2 " multiple="multiple" data-placeholder="Select a Group" name="assigned_catagory_id[]" style="width: 100%;" >
                    
                    <option value=" 1"> 1</option>
                    <option value=" 2"> 2</option>
                    <option value=" 3"> 3</option>
                    <option value=" 4"> 4</option>
                  </select>
                {!! $errors->first('assigned_catagory_id', '<p class="error-message">:message</p>') !!}

              </div>
            </div>


            <div class="col-md-1"></div>


            <div class="col-md-5">
              <div class=" form-group"> 
                <label>Execution</label>
                <input class="form-control " name="execution" style="width: 100%;" value="{{old('version')}}" >
                {!! $errors->first('execution', '<p class="error-message">:message</p>') !!}
              </div>
            </div>


            <div class="col-md-1"></div>

            <div class="col-md-5">
              <div class=" form-group"> 
                <label>SLA</label>
                <input class="form-control " name="sla" style="width: 100%;" value="{{old('version')}}" >
                {!! $errors->first('sla', '<p class="error-message">:message</p>') !!}
              </div>
            </div>

            <div class="col-md-1"></div>

             <div class="col-md-5">
              <div class=" form-group " style="margin-top: 30px"> 
             <label>Use Frequency</label>
            <input type="hidden"  name="frequently_used" value="0" />
            <div class="icheck-danger d-inline" style="margin-left: 10px">
              <input type="checkbox" id="checkboxPrimary1" name="frequently_used" value="1">
              <label for="checkboxPrimary1">
              </label>
            </div>
            </div>
            </div>


            <div class="col-md-11">
              <div class=" form-group"> 
                <label>Communication</label>            
                <div class="mb-3">
                  <textarea class="textarea" name="communication" placeholder="Place some text here" >{{old('communication')}}</textarea>
                  {!! $errors->first('communication', '<p class="error-message">:message</p>') !!}
                </div>
              </div>
            </div>
             

           
            <div class="col-md-1"></div>


            <div class="col-md-2 form-group col-form-label">
                <label>Upload File</label>
              </div>

              <div class="col-md-9 form-group" >
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="imgInp" name="file" accept=".pdf,.doc,.docx"  > 
                  <label class="custom-file-label" for="imgInp">Choose file</label>
                  {!! $errors->first('file', '<p class="error-message">:message</p>') !!}
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

  </script>
 


<script type="application/javascript">
    $('input[id="imgInp"]').change(function(e){
      var fileName = e.target.files[0].name;
      $(this).next('.custom-file-label').html(fileName);
    });
  </script>


  <script>
  $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>




  @endpush