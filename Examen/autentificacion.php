<?php
include "conexion.inc.php";
	$ci=$_POST['ci'];
	$pass=$_POST['clave'];

	$sql=mysqli_query($conn,"SELECT * FROM usuario WHERE ci='$ci'");
	if($fila=mysqli_fetch_assoc($sql)){
		if($pass==$fila['clave']){
			session_start();
			$_SESSION['ci']=$fila['ci'];
			header("Location: login.php");

		}else{
			echo '<script>alert("LA CONTRASEÑA ES INCORRECTA")</script> ';
			echo "<script>location.href='index.php'</script>";
		}
	}else{
	
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';		
		echo "<script>location.href='index.php'</script>";	
	}	
?>