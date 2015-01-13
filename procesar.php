<?php include ('includes/header.php');
			$user=$_POST['user'];
			$pass=$_POST['password'];	
			
			if ($user=='Pablito' && $pass=='unitel') {
				header('Location: usuarioA.php');
			exit;
			}
			else {
				header('Location: usuarioB.php');
			exit;
			}
			include ('includes/footer.php'); 
?>