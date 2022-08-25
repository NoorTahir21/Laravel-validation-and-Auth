<!DOCTYPE html>
<html>
<head>
	<title>Laravel login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h3 class="text-center">LOGIN</h3>
				<form action="userlogin" method="post">
					@csrf
					<input type="email" name="email" placeholder="Enter Email" class="form-control">
					@error('email')
					{{$message}}
					@enderror
					<br>
					<input type="password" name="password" placeholder="Enter password" class="form-control">
					@error('password')
					{{$message}}
					@enderror
					<br>
					<center><button type="submit" class="btn btn-success">Login</button></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>