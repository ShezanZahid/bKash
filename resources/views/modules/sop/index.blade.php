@extends('layouts.index')
@section('title','| sop List')
@section('content')
<!-- Content Wrapper. Contains page content -->

{{-- <?php

shell_exec( "gswin64c -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dNOPAUSE -dQUIET -dBATCH -sOutputFile=new-file.pdf test-file.pdf");

echo 'done';
?> --}}


<div class="content-wrapper">
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List of sop</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('sop.create')}}">Upload sop</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="card">
 
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped" >
      <thead>
        <tr>
          <th class="text-center align-middle" style="width: 3%">Catagory</th>
          <th class="text-center align-middle" style="width: 18%">Subcatagory</th>
          <th class="text-center align-middle" style="width: 17%">Type</th>
          <th class="text-center align-middle" style="width: 32%">Service Type</th>
          <th class="text-center align-middle" style="width: 10%">Assigned Group</th>
          <th class="text-center align-middle" style="width: 10%">Execution</th>
          <th class="text-center align-middle" style="width: 10%">SLA</th>
          <th class="text-center align-middle" style="width: 10%">Use Frequency</th>
          <th class="text-center align-middle" style="width: 10%">Communication</th>
          <th class="text-center align-middle" style="width: 10%">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach($sops as $sop)
      
        <tr>
          <td class="align-middle text-center" style="width: 3%">{{$sop->sop_catagory_id}}</td>
          <td class="align-middle text-center" style="width: 18%">{{$sop->sop_subcatagory_id}}</td>
          <td class="align-middle text-center" style="width: 17%">{{$sop->sop_type_id}}</td>
          <td class="align-middle text-center" style="width: 10%">{{$sop->service_type_id}}</td>
           
          <td class="align-middle text-center" style="width: 32%">
          @foreach($sop->assignedcatagories as $assignedcatagory)
          
                    <span class="badge badge-secondary">{{$assignedcatagory->name}}</span>
                      
           @endforeach
           {{--  <span class="badge badge-secondary">Call Center</span>
            <span class="badge badge-secondary">bKash Care</span> --}}
          
          </td>
          
          <td class="align-middle text-center" style="width: 10%">{{$sop->execution}}</td>
          <td class="align-middle text-center" style="width: 10%">{{$sop->sla}}</td>
          <td class="align-middle text-center" style="width: 10%">{{$sop->frequently_used}}</td>
          <td class="align-middle text-center" style="width: 10%">{!!$sop->communication!!}</td>
          

         {{--  <td class="align-middle text-center" style="width: 40%">
            <a href="{{ asset('sop-docs/images/'.$sop->image )}}" data-lightbox="gallery"><img src="{{ asset('sop-docs/images/'.$sop->image )}}" alt="sop image"  class="img-thumbnail" style="height: 250px; width: auto;"></a>
          </td> --}}
          <td class="align-middle text-center" style="width: 10%">
            
            
            <a href="{{ route('sop.show',$sop->id) }}" class="btn btn-block btn-outline-secondary btn-sm" style="width: 100%;">View</a>
            
            
            {{-- <a href="{{ route('sop.download',$sop->id) }}" class="btn btn-block btn-outline-success btn-sm" style="width: 100%;">Downlaod</a> --}}
            

            
          </td>
          {{-- <td class="align-middle text-center" style="width: 10%">
            
            <a href="{{ route('sop.edit',$sop->id) }}" class="btn btn-block btn-outline-info btn-sm" style="width: 100%;">Edit</a>
            
            <form method="Post" action="{{ route('sop.destroy',$sop->id) }}">
              {{method_field('DELETE')}}
              {{csrf_field()}}
              <button type="submit" class="btn btn-block btn-outline-danger btn-sm" style="width: 100%;margin-top: 8px">Delete</button>
            </form>
            
            
          </td> --}}
        </div>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>

@endsection
@push('scripts')
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/lightbox.min.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });


</script>


@endpush
