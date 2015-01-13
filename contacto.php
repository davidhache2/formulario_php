<?php include ('includes/header.php') ?>

		<div class="container">
			<form class="form-horizontal" method="post" action="procesar2.php">
				<label for="nombre">Nombre</label>
				<input class="form-control" name="nombre" placeholder="Ingrese su nombre" type="text" required="required">
				<label for="email">email</label>
				<input class="form-control" name="email" placeholder="Ingrese su email" type="email" required="required">
				<label for="poblacion">Población</label>
				<input class="form-control" name="poblacion" placeholder="Ingrese su poblacion" type="text" required="required">
				<br/>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
		
<?php include ('includes/footer.php'); ?>