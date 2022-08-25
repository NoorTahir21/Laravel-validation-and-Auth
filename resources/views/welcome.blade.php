<!DOCTYPE html>
<html>
<head>
    <title>Laravel Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="users" method="POST">
                @csrf
                <h3 class="text-center">SIGN UP</h3>
                <input type="text" name="name" placeholder="Enter name" class="form-control">
                <span style="color: red;">@error('name'){{$message}}@enderror</span><br>
                <input type="email" name="email" placeholder="Enter Email" class="form-control">
                <span style="color: red;">@error('email'){{$message}}@enderror</span><br>
                <input type="password" name="password" placeholder="Enter password" class="form-control">
                <span style="color: red;">@error('password'){{$message}}@enderror</span><br>
                <center><button type="submit" class="btn btn-success">Sign up</button></center>
            </form>
        </div>
    </div>
</div>
</body>
</html>