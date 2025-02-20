@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3"> News Edit Pages</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">

                <br><br><form action="{{route('news.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <input class="form-control" type="text" value="{{$edit->title}}" aria-label="default input example"><br>
                    <input class="form-control" type="text" value="{{$edit->short_p}}"  aria-label="default input example"><br> 
                    <img src="{{asset('upload/images/'.$edit->image)}}" alt="image"  width="300px" ><br><br>
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