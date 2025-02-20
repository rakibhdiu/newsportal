@extends('admin.layout.app')
@section('admin')

<h1 class="h3 mb-3">Protect Rules Edit pages</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{route('admin.protect.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input class="form-control" type="text" value="{{$edit->protect_title}}" name="protect_title" aria-label="default input example"><br>
                  <input class="form-control" type="text" value="{{$edit->short_p}}" name="short_p" aria-label="default input example"><br>
                  <input class="form-control" type="text" value="{{$edit->pro_rules1}}" name="pro_rules1" aria-label="default input example"><br>
                  <input class="form-control" type="text" value="{{$edit->pro_rules2}}" name="pro_rules2" aria-label="default input example"><br>
                  <input class="form-control" type="text" value="{{$edit->pro_rules3}}" name="pro_rules3" aria-label="default input example"><br>
                  <img src="{{asset('upload/images/'.$edit->image)}}" alt="image"  width="300px" ><br><br>
                  <input class="form-control" name="image" type="file" id="formFile"><br>
                  
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
    
@endsection