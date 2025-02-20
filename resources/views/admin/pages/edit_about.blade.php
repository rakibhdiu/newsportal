@extends('admin.layout.app')
@section('admin')

<h1 class="h3 mb-3">Edit About Page</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{route('admin.about.update',$editabout->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input class="form-control" type="text" value="{{$editabout->about_title}}" name="about_title" aria-label="default input example"><br>
                  <img  src="{{asset('upload/images/' .$editabout->image)}}" width="300px" alt="image"><br><br>
                  <input class="form-control" name="image" type="file" id="formFile"><br>
                  <textarea class="form-control" name="about_text" id="exampleFormControlTextarea1" rows="3">{{$editabout->about_text}}</textarea><br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
    
@endsection