<?php require 'partials/head.php';?>

<div class="container">
<h1>Edit</h1>

<form method="POST" action="/edit/<?=$c[1];?>">
	<div class="form-group">
		<span>First Name</span>
		<input type="text" name="firstname" class="form-control ">		
	</div>
	<div class="form-group">
		<span>Last Name</span>
		<input type="text" name="lastname" class="form-control">
	</div>
	<div class="form-group">
		<span>Email</span>
		<input type="text" name="email" class="form-control">
	</div>
	<input type="hidden" name="hidden" value="<?=$c[1];?>">
	<input type="submit" name="" value="Edit" class="btn btn-primary">
</form>

</div>

<?php require 'partials/footer.php';?>