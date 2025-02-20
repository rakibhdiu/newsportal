@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3"> Doctor Edit Pages</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
                <form action="{{route('admin.doctor.update',$editdoctor->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<input class="form-control" type="text" value="{{$editdoctor->title}}" name="title" aria-label="default input example"><br>
					<img src="{{asset('upload/images/' .$editdoctor->image_icon)}}" alt="image" width="150px"><br><br>
					<input class="form-control" name="image_icon" type="file" id="formFile"><br>
                    <img src="{{asset('upload/images/' .$editdoctor->bg_image)}}" alt="image" width="150px"><br><br>
					<input class="form-control" name="bg_image" type="file" id="formFile"><br>
					<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$editdoctor->description}}</textarea><br>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
                
             </div>
			<div class="card-body">
			</div>
		</div>
	</div>
</div>
@endsection