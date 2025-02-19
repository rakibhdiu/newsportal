@extends('admin.layout.app')
@section('admin')

<h1 class="h3 mb-3">Add News</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="text" name="title" placeholder="Enter title"><br><br>
                  <input type="text" name="short_p" placeholder="Enter Short paragraph"><br><br>
                  <input class="form-control" name="image" type="file" id="formFile"><br>
                  <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"></textarea><br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
    
@endsection