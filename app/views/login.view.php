<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="/public/css/bootstrap.css" rel="stylesheet">
    <link href="/public/css/login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Start Login -->

    <section class="text-center">
    	<h1>Login</h1>

      <!-- Start Form Login -->

    	<form method="POST" action="/login">

    		<div class="form-group">
    		<input type="text" name="email" class="form-control" placeholder="Email">
    		</div>

    		<div class="form-group">    		
    		<input type="text" name="password" class="form-control" placeholder="Password">
    		</div>
        
    		<div class="form-group">
    		<input type="submit" name="login" class="btn btn-primary button" value="Login">
    		</div>
    	</form>

      <!-- End Form Login -->

    </section>

    <!-- End Login -->

   
   <script src="public/js/jquery-3.2.1.min.js"></script>
   <script src="public/js/bootstrap.min.js"></script>
   <script src="public/js/script.js"></script>
  </body>
</html>