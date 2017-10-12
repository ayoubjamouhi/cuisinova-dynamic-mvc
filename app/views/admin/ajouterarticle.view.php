<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../public/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/admin.css">
  <link rel="stylesheet" href="../public/textareaEditor/css/codemirror.min.css">
  <link href="../public/textareaEditor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="../public/textareaEditor/css/froala_style.min.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<section class="admin">
	<?php require 'partials/leftbanner.php'; ?>
	<div class="right">
		<form enctype="multipart/form-data" method="POST" action="/admin/checknewarticle">
			<div>
				<span>Titre</span><br>
				<input type="text" name="titre" required="">
			</div>
			
			<div>
				<span>Text</span>
				<textarea id="froala-editor" name="text">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
			</div>

			<div>
				<span>Image</span><br>
				<input type="file" name="fic" size=50 required=""/>
			</div>	

			<div>
				<input type="submit" name="ajouterarticle" value="Ajoutez">
			</div>
		</form>
	</div>
</section>

<!-- Start Jquery -->
<script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../public/textareaEditor/js/codemirror.min.js"></script>
<script type="text/javascript" src="../public/textareaEditor/js/xml.min.js"></script>
<script type="text/javascript" src="../public/textareaEditor/js/froala_editor.pkgd.min.js"></script>
<script type="text/javascript" src="../public/js/script.js"></script>
<!-- End Jquery -->
</body>
</html>