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
					<?php echo csrf_field(); ?>
					<input type="email" name="email" placeholder="Enter Email" class="form-control">
					<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					<br>
					<input type="password" name="password" placeholder="Enter password" class="form-control">
					<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					<br>
					<center><button type="submit" class="btn btn-success">Login</button></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\validation\resources\views/login.blade.php ENDPATH**/ ?>