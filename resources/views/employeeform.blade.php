<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<br><br>
  <div class="row">

    <div class="container">
      <a href="/employee" class="btn btn-info">Add Image</a>
       <h2 align="center">Fetch Data</h2> <br>
      <div class="jumbotron">
        <table class="table table-stripped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Post</th>
              <th scope="col">Image</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach($employees as $employee)
            <tr>
              <th>{{ $employee->id }}</th>
              <th>{{ $employee->name }}</th>
              <th>{{ $employee->email }}</th>
              <th>{{ $employee->post }}</th>
              <th><img src="{{ asset('uploads/employee/'.$employee->image) }}" width="100px;" height="100px;"></th>
              <th><a href="/editimage/{{ $employee->id }}" class="btn btn-success">Edite</a></th>
               <th><a href="/deleteimage/{{ $employee->id }}" class="btn btn-danger">Delete</a></th>
            </tr>
             @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</body>
</html>