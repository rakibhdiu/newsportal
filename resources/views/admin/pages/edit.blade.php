@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Show News</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">

                <br><br><form action="{{route('update',$edit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" value="{{$edit->title}}" placeholder="Enter title"><br><br>
                    <input type="text" name="short_p" value="{{$edit->short_p}}" placeholder="Enter Short paragraph"><br><br>
                    <img src="{{asset('upload/images/'.$edit->image)}}" alt="image"  width="300px" ><br>
                     <input class="form-control" name="image"  type="file" id="formFile"><br>
                    <textarea class="form-control" name="des" >{{$edit->description}}</textarea><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
			<div class="card-body">
			</div>
		</div>
	</div>
</div>
@endsection