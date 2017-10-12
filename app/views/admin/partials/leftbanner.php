<div class="left">
	<div class="title">Accueil</div>
	<div class="cat">
		<ul>
			<li>
				<a href="/admin/ajouterarticle">Ajoutez article</a>
			</li>
		</ul>
	</div>
	<?php if($_SESSION['user'] != FALSE) :?>
	<div class="title"><a href="/admin/logout">Logout</a></div>
	<?php endif; ?>

</div>