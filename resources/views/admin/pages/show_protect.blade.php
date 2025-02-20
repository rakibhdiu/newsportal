@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Show Protection News</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Protect Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Short Paragraph</th>
                        <th scope="col">Rules-1</th>
                        <th scope="col">Rules-2</th>
                        <th scope="col">Rules-3</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($protect as $pro)
                      <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->protect_title}}</td>
                        <td>
                            <img width="200px" src="{{asset('upload/images/' .$pro->image)}}" alt="image">
                        </td>
                        <td>{{$pro->short_p}}</td>
                        <td>{{$pro->pro_rules1}}</td>
                        <td>{{$pro->pro_rules2}}</td>
                        <td>{{$pro->pro_rules3}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.edit.protect',$pro->id)}}"> Edit</a>
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