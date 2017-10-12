<?php require 'partials/head.php';?>

<div class="container">
<h1>Edit</h1>
<? if($edit): ?>
<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Enter a valid email address
</div>
<? endif;?>


<?php require 'partials/footer.php';?>
