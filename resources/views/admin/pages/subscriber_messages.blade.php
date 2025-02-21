@extends('admin.layout.app')
@section('admin')
<h1 class="h3 mb-3">Subscriber Messages</h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Messages</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($subscriptions as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->message}}</td>
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