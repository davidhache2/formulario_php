<?php include ('includes/header.php');?>
	<div class="container">
		<?php
			$nombre=$_POST['nombre'];
			$email=$_POST['email'];	
			$poblacion=$_POST['poblacion'];	
			include ('includes/functions.php');
			echo sobreMi($nombre,$email,$poblacion);
		?>
	</div>
<?php	include ('includes/footer.php'); ?>
