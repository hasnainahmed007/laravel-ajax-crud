<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  @include('student/add_student')
 
    
    <div class="container">
<div class="card-body">
<a href="" class="btn btn-primary mt-4 ml-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</a>
  <div class="row">
    <div class="col-md-2"></div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $row)
    <tr>
    <td>{{$row->id}}</td>
    <td>{{$row->name}}</td>
      <td>{{$row->roll}}</td>
      <td>{{$row->phone}}</td>
      <td>{{$row->email}}</td>
      <td>
        <a href="{{route('student.edit',$row->id)}}"  class="btn btn-primary">Edit</a>
        <a href="{{route('student.destroy',$row->id)}}" onclick= "return confirm('are you sure to delete')" class="btn btn-danger">Delete</a>
        <a href="{{route('student.show',$row->id)}}"  class="btn btn-primary">View</a>
      </td>

      
    </tr>
    @endforeach
   
  </tbody>
</table>
{{ $students->links() }}
</div>
</div>
</div>
</body>
</html>