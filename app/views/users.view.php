
<?php require 'partials/head.php';?>

<?php $a=explode('/','edit'); 
/* f(count($a) == 1)
	echo "y";
*/

if($_SESSION['user'] !=false):
?>
<h1>Clients</h1>
<?php endif; ?>
<table class="table">
	<thead>
		<tr>
		<th>#</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	
		<?php foreach ($users as $task)	: ?>
		<tr>
		<td><?=$task->id;?></td>
		<td><?=$task->firstname;?></td>
		<td><?=$task->lastname;?></td>
		<td><?=$task->email;?></td>
		<td><a href="/edit/<?=$task->id;?>">Edit</a></td>
		<td><a href="/delete/<?=$task->id;?>">Delete</a></td>
		</tr>
		<?php endforeach; ?>
		
	</tbody>
</table>
<form method="POST" action="/users">
	<div class="form-group">
		<span>First Name</span>
		<input type="text" class="form-control" name="firstname">		
	</div>
	<div class="form-group">
		<span>Last Name</span>
		<input type="text" name="lastname" class="form-control">
	</div>
	<div class="form-group">
		<span>Email</span>
		<input type="text" name="email" class="form-control">
	</div>
	<input type="submit" name="" value="Submit" class="btn btn-primary">
</form>



<?php require 'partials/footer.php';?>
