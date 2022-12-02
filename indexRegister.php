<!DOCTYPE html>
<html>
<head>
<title> Register </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="register.php" method="post">
<div class="container">
<h3 class="text-center">Registrazione</h3>
<div class="form-group">
<h4>Username</h4>
<input class="form-control" type="text" name="username" required>
</div>
<div class="form-group">
<h4>Password</h4>
<input class="form-control" type="password" name="password" required>
</div>
<div class="form-group">
<h4>Conferma password</h4>
<input class="form-control" type="password" name="passwordConfirm" required>
</div>
<button type="submit" name="submit" class="btn btn-default">Register</button>
<?php
if(isset($_GET['error'])){
	echo $_GET['error'];
}
?>
</form>
</body>
</html>