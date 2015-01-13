<?php include ('includes/header.php') ?>
		<div class="container">
			<form class="form-horizontal" method="post" action="procesar.php">
				<label for="user">Usuario</label>
				<input class="form-control" name="user" placeholder="Ingrese su usuario" type="text" required="required">
				<label for="password">Contraseña</label>
				<input class="form-control" name="password" placeholder="Ingrese su contraseña" type="password" required="required">
				<br/>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
		
<?php include ('includes/footer.php'); ?>