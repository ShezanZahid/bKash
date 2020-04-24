@extends('layouts.index')
@section('title','| PCR List')
@section('content')
<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List of PCR</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('pcr.create')}}">Upload approvedprocess</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="card">

  <!-- /.card-header -->
  <div class="card-body" style="overflow: auto">
    <table id="example1" class="table table-bordered table-striped" style="overflow:scroll; " width="1600"  >
      <thead >
        <tr>
          <th class="text-center align-middle" style="">ID</th>
          {{-- <th class="text-center align-middle" style="">Depertment</th>
          <th class="text-center align-middle" style="">Stakeholder Name</th>
          <th class="text-center align-middle" style="">Stakeholder Number</th> --}}
          <th class="text-center align-middle" style="">Request Submission Date</th>
          <th class="text-center align-middle" style="">Change Requested by</th>
          <th class="text-center align-middle" style="">Type Of Request</th>
          <th class="text-center align-middle" style="">Urgency</th>
          <th class="text-center align-middle" style="">Process Need to be changed</th>
          <th class="text-center align-middle" style="">Process version</th>
          <th class="text-center align-middle" style="">Objective of Change</th>
          <th class="text-center align-middle" style="">Approval Status</th>
          <th class="text-center align-middle" style="">CPM Remarks</th>
          {{-- <th class="text-center align-middle" style="">Action</th> --}}
        </tr>
      </thead>
      <tbody>
        
        @foreach($pcrs as $pcr)

        <tr>
          <td class="align-middle text-center" style="">{{$pcr->id}}</td>
         {{--  <td class="align-middle text-center" style="">{{$pcr->depertment_id}}</td>
          <td class="align-middle text-center" style="">{{$pcr->stakeholder_name}}</td>
          <td class="align-middle text-center" style="">{{$pcr->stakeholder_number}}</td> --}}
          <td class="align-middle text-center" style="">{{$pcr->submission_date}}  </td>
          <td class="align-middle text-center" style="">{{$pcr->request_by_date}}</td>
          <td class="align-middle text-center" style="">{{$pcr->request_type}}</td>
          <td class="align-middle text-center" style="">{{$pcr->urgency==1? 'High':'Low'}}  </td>
          <td class="align-middle text-center" style="">{{$pcr->process_name}}</td>
          <td class="align-middle text-center" style="">{{$pcr->process_version}}</td>
          <td class="align-middle text-center" style="">{{$pcr->change_objective}} </td>
          <td class="align-middle text-center" style="">{{$pcr->approval_status==1? 'Approved':($pcr->approval_status==0?'Rejected':'Not checked yet')}}</td>
          <td class="align-middle text-center" style="">{{$pcr->cpm_remarks}}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
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
      "autoWidth": true,
    });
  });


</script>


@endpush