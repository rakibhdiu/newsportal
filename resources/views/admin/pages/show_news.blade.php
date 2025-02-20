@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Show News</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Short Paragraph</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
          
          @foreach ($news as $news)
          <tr>
            <td>{{$news->id}}</td>
            <td>{{$news->title}}</td>
            <td>
                <img width="200px" src="{{asset('upload/images/' .$news->image)}}" alt="image">
            </td>
            <td>{{$news->short_p}}</td>
            <td>{{$news->description}}</td>
            <td>
                <a class="btn btn-success" href="{{route('news.edit',$news->id)}}"> Edit</a>
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