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
       <h2 align="center">Insert Image and Register Form</h2> <br>
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               
              </div>
              <div class="form-group">
                <label for="post">Post</label>
                <input type="text" name="post" class="form-control" id="exampleInputPassword1" placeholder="Enter Post">
              </div>
              <div class="form-group">
                <label for="image">Choose File</label>
                <input type="file" name="image" class="form-control" id="file">
             </div>
 
            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
    </div>

  </div>
</body>
</html>