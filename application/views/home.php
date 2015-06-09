<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Git-UAP | 2017</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.form.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.alphanumeric.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.date.js"></script>
	<script src="<?=base_url();?>assets/frontend/js/jquery.validate.messages_es.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#login').click(function(event) {
				event.preventDefault();
				$('#formulario').show();
			});


		});
	</script>
</head>
<body>
	<div id="formulario" style="display:none">
		<form action="<?=base_url();?>login" method="post">
			<input type="hidden" name="sis" value="hola">
			<input type="text" name="user">
			<input type="password" name="pass">
			<input type="submit" value="Enviar">
		</form>
	</div>
	<header>
		<h1>GIT-UAP</h1>
		<ul>
			<li><a id="login" href="#">Ingresar al sistema</a></li>
		</ul>
	</header>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero tempora accusantium labore cum dolor sapiente atque beatae placeat, ut officia praesentium quo nemo eaque libero dolore nisi repudiandae laborum doloribus.</p>
	<footer>
		<h6>&copy; Copyright 2015</h6>
	</footer>
</body>
</html>