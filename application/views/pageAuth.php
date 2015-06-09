<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Git-UAP</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.form.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.alphanumeric.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.date.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.messages_es.js"></script>
</head>
<body>
	<header>
		<h1>GIT-UAP</h1>
		<ul>
			<?php if ($usuario->idTipoUsuario<3): ?>
				<li><a href="admin">ir panel de administracion</a></li>
			<?php endif ?>
			<li><a href="logout">cerrar sesion</a></li>
		</ul>
	</header>
	<h2><?=$usuario->nombre;?></h2>
	<h3><?=$usuario->correo;?></h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero tempora accusantium labore cum dolor sapiente atque beatae placeat, ut officia praesentium quo nemo eaque libero dolore nisi repudiandae laborum doloribus.</p>
	<form action="home/subir" method="post" enctype="multipart/form-data">
		<input type="file" name="pdf"><input type="submit" value="subir">
	</form>
	<footer>
		<h6>&copy; Copyright 2015</h6>
	</footer>
</body>
</html>