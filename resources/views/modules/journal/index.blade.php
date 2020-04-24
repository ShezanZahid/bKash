@extends('layouts.index')
@section('title','| Journal List')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List of Journal</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('journal.create')}}">Upload Journal</a></li>
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
          <th class="text-center align-middle" style="width: 3%">ID</th>
          <th class="text-center align-middle" style="width: 10%">Journal Name</th>
          <th class="text-center align-middle" style="width: 17%">Journal Description</th>
          <th class="text-center align-middle" style="width: 10%">Publication Date</th>
          <th class="text-center align-middle" style="width: 40%">Image</th>
          <th class="text-center align-middle" style="width: 10%">File</th>
          <th class="text-center align-middle" style="width: 10%">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($journals as $journal)
        <tr>
          <td class="align-middle text-center" style="width: 3%">{{$journal->id}}</td>
          <td class="align-middle text-center" style="width: 10%">{{$journal->name}}</td>
          <td class="align-middle text-center" style="width: 17%">{!!$journal->description!!}</td>
          <td class="align-middle text-center" style="width: 10%">{{date('M j, Y h:ia',strtotime($journal->created_at))}}</td>
          
          <td class="align-middle text-center" style="width: 40%">
            <a href="{{ asset('journal-docs/images/'.$journal->image )}}" data-lightbox="gallery"><img src="{{ asset('journal-docs/images/'.$journal->image )}}" alt="journal image" id="img"  class="img-thumbnail" style="height: 250px; width: auto; "></a>
          </td>

          <td class="align-middle text-center" style="width: 10%">

            <a href="{{ route('journal.downloadview',$journal->id) }}" class="btn btn-block btn-outline-secondary btn-sm" style="width: 100%;">View</a>      

            <a href="{{ route('journal.download',$journal->id) }}" class="btn btn-block btn-outline-success btn-sm" style="width: 100%;">Downlaod</a>
          </td>

          <td class="align-middle text-center" style="width: 10%">
            <a href="{{ route('journal.edit',$journal->id) }}" class="btn btn-block btn-outline-info btn-sm" style="width: 100%;">Edit</a>  
            <form method="Post" action="{{ route('journal.destroy',$journal->id) }}">
              {{method_field('DELETE')}}
              {{csrf_field()}}
              <button type="submit" class="btn btn-block btn-outline-danger btn-sm" style="width: 100%;margin-top: 8px">Delete</button>
            </form>
          </td>

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
<!-- jQuery version must be >= 1.8.0; -->


<!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

<script src="{{asset('dist/js/lightgallery-all.min.js')}}"></script>

<!-- lightgallery plugins -->
<script src="{{asset('dist/js/lightgallery.min.js')}}"></script>

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

 // document.addEventListener('img', event => event.preventDefault());

/*  $('img').mousedown(function (e) {
  if(e.button == 2) { // right click
    return false; // do nothing!
  }
}*/
</script>
<script>

  $(document).ready(function() {
    $("#lightgallery").lightGallery(); 
  });

</script>






@endpush
