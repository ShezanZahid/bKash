@extends('layouts.index')
@section('title','| Journal Upload')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">

		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Uploading Journal</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item a"><a href="{{route('journal.index')}}">List of Journal</a></li>
				</ol>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>

	<section class="content">
		<form method="Post" action="{{route('journal.store')}}" enctype="multipart/form-data">
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
						<div class="row" style=>
							<div class="col-md-3 form-group col-form-label text-md-center">
								<label>Journal Name</label>
							</div>
							<div class="col-md-8 form-group" >
								<input class="form-control" name="name" style="width: 100%;" value="{{old('name')}}" >
								{!! $errors->first('name', '<p class="error-message">:message</p>') !!}
							</div>


							<div class="col-md-3 form-group col-form-label text-md-center">
								<label>Journal Description</label>
							</div>
							<div class="col-md-8  form-group">            
								<div class="mb-3">
									<textarea class="textarea" name="description" placeholder="Place some text here" >{{old('description')}}</textarea>
									{!! $errors->first('description', '<p class="error-message">:message</p>') !!}
								</div>
							</div> 


							<div class="col-md-3 form-group col-form-label text-md-center">
								<label>Upload Image</label>
							</div>
							<div class="col-md-8 form-group">

								
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="imgInp" name="image" accept=".jpg,.png"  > 
									<label class="custom-file-label" for="imgInp">Choose file</label>
									{!! $errors->first('image', '<p class="error-message">:message</p>') !!}
								</div>

							
								<img id='img-upload' name='uploadImage' class="rounded mx-auto d-block" width="650" style="margin-top:15px" />
							</div>

							<div class="col-md-3 form-group col-form-label text-md-center">
								<label>Upload File</label>
							</div>

							<div class="col-md-8 form-group" >
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="imgInp" name="file" accept=".pdf,.doc,.docx"  > 
									<label class="custom-file-label" for="imgInp">Choose file</label>
									{!! $errors->first('file', '<p class="error-message">:message</p>') !!}
								</div>
							</div>

				   
        			

		            {{-- <div class="col-md-8 form-group">
				        <div class="input-group">
				            <span class="input-group-btn">
				                <span class="btn btn-default btn-file">
				                    Browse File <input type="file" id="imgInp" name="file">
				                </span>
				            </span>
				            <input type="text" class="form-control {{$errors->has('file')?' is-invalid':''}} " readonly>
				        </div>
				    </div> --}}

					{{-- <div class="col-md-3 form-group col-form-label text-md-center">
		                <label>Upload File</label>
		            </div>
		            <div class="col-md-8 form-group">
						  <div class="custom-file">
						    <input type="file" class="custom-file-input" id="inputGroupFile01" name="file" >
						    <label class="custom-file-label {{$errors->has('file')?'label-danger':''}} " for="inputGroupFile01" >Choose File</label>
						  </div>
					</div>
					--}}
					{{-- <div class="col-md-10 offset-md-1">
						
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
<script>
	$(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>

<script>
	$(document).ready( function() {
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
			
			var input = $(this).parents('.input-group').find(':text'),
			log = label;

			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}

		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#img-upload').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#imgInp").change(function(){
			readURL(this);
		}); 	
	});
</script>

<script type="application/javascript">
    $('input[id="imgInp"]').change(function(e){
      var fileName = e.target.files[0].name;
      $(this).next('.custom-file-label').html(fileName);
    });
  </script>

@endpush