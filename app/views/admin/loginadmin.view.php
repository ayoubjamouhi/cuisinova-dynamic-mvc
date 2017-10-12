<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="public/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/admin.css">

	
</head>
<body>

<section class="login">
	<h1>Se connecter</h1>
	<form action="/admin/checklogin_admin" method="POST">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" value="Entrer">	
	</form>
</section>

<!-- Start Jquery -->
<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/js/script.js"></script>
<!-- End Jquery -->
</body>
</html>