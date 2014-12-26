<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="css/pragma.min.css">
</head>
<body>
	<form data-pragma-validate>
	<!--Definición del sumario-->
	<div class="summary"></div>
	<!--Campos y validaciones-->
	<div class="row">
		<label for="email" class="xs-4 text-right">Correo Electrónico</label>
		<input type="email" required id="email" name="email" class="xs-8"/>
		<div class="help xs-8 xs-offset-4"></div>
	</div>
	<div class="row">
		<label for="pass" class="xs-4 text-right">Contraseña</label>
		<input type="password" required id="pass" name="pass" class="xs-8"/>
		<div class="help xs-8 xs-offset-4"></div>
	</div>
	<div class="row">
		<label for="rpass" class="xs-4 text-right">Repita la contraseña</label>
		<input type="password" required data-rule-equalto="pass" data-msg-equalto="Las contraseñas no coinciden." id="rpass" name="rpass" class="xs-8"/>
		<div class="help xs-8 xs-offset-4"></div>
	</div>
	<div class="row">
		<div class="xs-8 xs-offset-4">
			<button type="submit" class="button primary">Enviar</button>
		</div>
	</div>
</form>
</body>
<script src="js/pragma.min.js"></script>
</html>