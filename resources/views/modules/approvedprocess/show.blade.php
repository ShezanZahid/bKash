@extends('layouts.index')
@section('title','| Approved Process')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="row mb-3">
      <div class="col-sm-6">
        <h1>Approved Process</h1>
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
            <div class="col-md-3 ">
              <div class="form-group" style="text-align: right;">
                <label>Assigned Group :</label>
              </div>
            </div>
            <div class="col-md-9 ">
              <div class="form-group">
                @foreach($approvedprocess->assignedcatagories as $assignedcatagory)
                
                <span class="badge badge-secondary">{{$assignedcatagory->name}}</span>
                
                @endforeach
              </div>
            </div>


            <div class="col-md-3 " style="text-align: right;">
              <div class="form-group">
                <label>Catagory :</label>
              </div>
            </div>
            <div class="col-md-9 ">
              <div class="form-group">
                {{$approvedprocess->process_catagory->name}}
              </div>
            </div>


            <div class="col-md-3 " style="text-align: right;">
              <div class="form-group">
                <label>Circulation Date :</label>
              </div>
            </div>
            <div class="col-md-9 ">
              <div class="form-group">
               {{date('M j, Y ',strtotime($approvedprocess->circulation_date))}}
             </div>
           </div>


           <div class="col-md-3 " style="text-align: right;">
            <div class="form-group">
              <label>Approved Process Name :</label>
            </div>
          </div>
          <div class="col-md-9 ">
            <div class="form-group">
             {{$approvedprocess->name}}
           </div>
         </div>

         <div class="col-md-3 " style="text-align: right;">
          <div class="form-group">
            <label>Approved Process Version :</label>
          </div>
        </div>
        <div class="col-md-9 ">
          <div class="form-group">
            {{$approvedprocess->version}}
          </div>
        </div>
        
        <div class="col-md-12 form-group" ><label><h3 style=" text-decoration: underline;">Uploaded Files:<h3></label>  </div> 


          <div class="col-md-2 form-group col-form-label text-md-center">
            <label>Approved File </label>
          </div>
          <div class="col-md-4 form-group text-md-center" >

            {{$approvedprocess->approved_file}}
            
          </div>

          

          <div class="col-sm-3" >
            <button type="submit" class="btn btn-block btn-outline-success btn-sm" style="width: 80%; margin:0 auto;">View</button>
          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-block btn-outline-secondary btn-sm" style="width: 80%; margin:0 auto;">Download</button>
          </div>


          <div class="col-md-2 form-group col-form-label text-md-center">
            <label>Signed Document </label>
          </div>
          <div class="col-md-4 form-group text-md-center" >

            {{$approvedprocess->signed_file}}

          </div>
          <div class="col-sm-3 " >
            <button type="submit" class="btn btn-block btn-outline-success btn-sm" style="width: 80%; margin:0 auto;">View</button>
          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-block btn-outline-secondary btn-sm" style="width: 80%; margin:0 auto;">Download</button>
          </div>


          <div class="col-md-2 form-group col-form-label text-md-center">
            <label>Signed Document </label>
          </div>
          <div class="col-md-4 form-group text-md-center" >

            {{$approvedprocess->approved_file}}

          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-block btn-outline-success btn-sm" style="width: 80%; margin:0 auto;">View</button>
          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-block btn-outline-secondary btn-sm" style="width: 80%; margin:0 auto;">Download</button>
          </div>


          

          




          

          <div class="col-md-6 form-group">


            <a href="{{ route('approvedprocess.edit',$approvedprocess->id)}}" type="submit" class="btn btn-block btn-info btn-sm" style="width: 80%; margin:0 auto; ">Edit</a>
          </div>

          <div class="col-sm-6 form-group">
            <form method="Post" action="{{ route('approvedprocess.destroy',$approvedprocess->id) }}">
              {{method_field('DELETE')}}
              {{csrf_field()}}
              <button type="submit" class="btn btn-block btn-danger btn-sm" style="width: 80%; margin:0 auto;">Delete</button>
            </form>
            
          </div>

        </div>
      </div>



    </section>
  </div>








  @endsection

  @push('scripts')

  <script type="text/javascript">
    $(function () {
    //Initialize Select3 Elements
    $('.select3').select3()
  });

    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask3 mm/dd/yyyy
    $('#datemask3').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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