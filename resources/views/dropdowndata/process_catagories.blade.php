 @extends('layouts.index')
 @section('title','| Approved Process Upload')
 @section('content')

 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Approved Process Catagories</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item a"><a href="{{route('processcatagory.index')}}">List of Approved Process</a></li>
        </ol>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <section class="content">
  	<div class="container-fluid">
  		<div class="card card-default">
  			<div class="card-body">
  				<div class="row">
  					<div class="col-md-8">

              <table class="table table-bordered table-striped" >
                <thead>
                  <tr>
                    <th class="text-center align-middle" style="width: 10%">ID</th>
                    <th class="text-center align-middle" style="width: 40%">Catagory Name</th>
                    <th class="text-center align-middle" style="width: 15%">Status</th>
                    <th class="text-center align-middle" style="width: 15%">Change Status</th>
                    <th class="text-center align-middle" style="width: 20%">Action</th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($processcatagories as $processcatagory)
                  <tr>
                    <td class="align-middle text-center" style="width: 10%">{{$processcatagory->id}}</td>
                    <td class="align-middle text-center" style="width: 40%">{{$processcatagory->name}}</td>
                    <td class="align-middle text-center" style="width: 15%">
                     @if($processcatagory->status==1)
                     <span class="badge badge-success">Active</span>
                    
                     @else
                     <span class="badge badge-danger">Inactive</span>
                     @endif
                   </td>

                   <td class="align-middle text-center" style="width: 15%">
                     @if($processcatagory->status==1)

                     <a class="btn btn-danger btn-xs" href="{{route('processcatagory.status',$processcatagory->id)}}">OFF 
                    </a>

                    @else

                    <a class="btn btn-success btn-xs" href="{{route('processcatagory.status',$processcatagory->id)}}">
                      ON
                    </a>

                    @endif
                  </td>
                  <td class="align-middle text-center" style="width: 20%">
                    <div class="row">
                    
                      <div class="col-sm-12">
                        <form method="Post" action="{{ route('processcatagory.destroy',$processcatagory->id) }}">
                          {{method_field('DELETE')}}
                          {{csrf_field()}}
                          <button type="submit" class="btn btn-block btn-outline-danger btn-sm" style="width: 100%;margin-top: 8px">Delete</button>
                        </form>
                        
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
            <div class="card border-dark mb-3" style="max-width: 100%;">
             <div class="card-header"><b>Add New Catagory</b></div>
             <div class="card-body text-dark">
              <p class="card-text">
               <form method="Post" action="{{route('processcatagory.store')}}">
                @csrf


                <div class="row">
                  <div class="col-md-12">
                    <label>Catagory Name</label> 
                  </div>
                  <div class="col-md-12">
                    <input class="form-control {{$errors->has('name')?' is-invalid':''}}" name="name" style="width: 100%;" value="{{old('name')}}" >
                  </div>
                  <div class="col-md-12" style="margin-top: 30px">
                    <input type="hidden"  name="status" value="0" />
                    <div class="icheck-info d-inline">
                      <input type="checkbox" id="checkboxPrimary1" name="status" value="1">
                      <label for="checkboxPrimary1">
                       Catagory Status
                     </label>
                   </div>
                 </div>
               </div>


               <div >
                 <button type="submit" class="btn btn-block btn-outline-primary btn-sm" style="width: 100%; margin-top: 30px"><b>Submit</b></button>
               </div>

             </form>
           </p>
         </div>
       </div>

     </div>
   </div>
 </div>
</div>
</div>
</section>
</div>	








@endsection