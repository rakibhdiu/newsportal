<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body>
    @include('sweetalert::alert')
  <a style="padding: 10px;
    margin: 12px;
    text-decoration: none;
    border: 1px solid;
    background: #090ee4;
    color: white;
    " href="{{route('admin.dashboard')}}">Admin Dashboard</a>
    <br><br><form action="{{route('update',$edit->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" value="{{$edit->title}}" placeholder="Enter title"><br><br>
        <input type="text" name="short_p" value="{{$edit->short_p}}" placeholder="Enter Short paragraph"><br><br>
        <img src="{{asset('upload/images/'.$edit->image)}}" alt="image"  width="300px" ><br>
         <input class="form-control" name="image"  type="file" id="formFile"><br>
        <textarea class="form-control" name="des" >{{$edit->description}}</textarea><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>