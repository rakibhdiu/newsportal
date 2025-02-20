@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Show About</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title About</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
          
          @foreach ($about as $about)
          <tr>
            <td>{{$about->id}}</td>
            <td>{{$about->about_title}}</td>
            <td>
                <img width="200px" src="{{asset('upload/images/' .$about->image)}}" alt="image">
            </td>
          
            <td>{{$about->about_text}}</td>
            <td>
                <a class="btn btn-success" href="{{route('admin.about.edit',$about->id)}}"> Edit</a>
            </td>
           </tr>
           
          @endforeach
         
         </table>
                     
			</div>
			<div class="card-body">
			</div>
		</div>
	</div>
</div>
@endsection