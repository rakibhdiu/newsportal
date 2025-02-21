@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Add Doctor</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
           
				<form action="{{route('admin.doctor.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<input class="form-control" type="text" placeholder="Enter The TItle What Doctor Say..." name="title" aria-label="default input example"><br>
					
					<input class="form-control" name="image" type="file" id="formFile"><br>
				
					<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea><br>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>


            </div>
			<div class="card-body">
			</div>
		</div>
	</div>
</div>
@endsection