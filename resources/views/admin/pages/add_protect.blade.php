@extends('admin.layout.app')
@section('admin')

<h1 class="h3 mb-3">Protect You from vious</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{route('admin.protect.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input class="form-control" type="text" placeholder="Enter The Protection Title" name="protect_title" aria-label="default input example"><br>
                  <input class="form-control" type="text" placeholder="Enter Short paragraph" name="short_p" aria-label="default input example"><br>
                  <input class="form-control" type="text" placeholder="Enter Short pro_rules1" name="pro_rules1" aria-label="default input example"><br>
                  <input class="form-control" type="text" placeholder="Enter Short pro_rules2" name="pro_rules2" aria-label="default input example"><br>
                  <input class="form-control" type="text" placeholder="Enter Short pro_rules3" name="pro_rules3" aria-label="default input example"><br>
                  <input class="form-control" name="image" type="file" id="formFile"><br>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
    
@endsection