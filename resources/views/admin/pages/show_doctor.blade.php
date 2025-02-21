@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Show Doctor</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
            <table class="table table-bordered">
            <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">image_icon</th>
                      <th scope="col">bg_image</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctor as $item)
                    <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td>
                       {{$item->title}}
                      </td>
                      <td>
                        <img src="{{asset('upload/images/' .$item->image)}}" alt="image" width="150px">
                      </td>
                      <td>{{$item->description}}</td>
                      <td>
                        <a class="btn btn-primary" href="{{route('admin.doctor.edit',$item->id)}}">Edit</a>
                      </td>
                    </tr> 
                    @endforeach
                    
                   
                    
                  </tbody>
            </table>



            </div>
			<div class="card-body">
			</div>
		</div>
	</div>
</div>
@endsection