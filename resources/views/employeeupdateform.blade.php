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
       <h2 align="center">Update Form</h2> <br>
        <form action="/updateimage/{{ $employees->id }}" method="POST" enctype="multipart/form-data">
          
      {{ csrf_field() }}
      {{ method_field('PUT') }}
          <input type="hidden" name="id" id="id" value="{{ $employees->id }}">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $employees->name }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $employees->email }}">
               
              </div>
              <div class="form-group">
                <label for="post">Post</label>
                <input type="text" name="post" class="form-control" value="{{ $employees->post }}">
              </div>
              <div class="form-group">
                <img src="{{ asset('uploads/employee/'.$employees->image) }}" width="100px;" height="100px;">
                <label for="image">Choose File</label>
                <input type="file" name="image" class="form-control" id="file" value="{{ $employees->image }}">
             </div>
 
            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
    </div>

  </div>
</body>
</html>