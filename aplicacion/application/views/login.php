<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="<?= base_url() ?>plantilla/css/hojaestilo.css" type="text/css" rel="stylesheet" />
</head>
<body id="inicio">
<div id="container">
	<div id="body">
		<div class="d0">
        <div class="d1">
            <div class="d2">
                <h1 class="t1">UMSA - PRIMER EXAMEN PARCIAL INF -324 CodeIgniter!</h1>
                <div class="d3">
                    <img class="fotog" src="imagenes/usuarioGlobal.jpg">
                </div>
            </div>
        </div>
    </div>
	<div id="a1">
	    <form action="<?php base_url();?>login" method="post">
	    	<h2>INICIAR SECIÓN</h2>
	      <label>Usuario</label><input type="text" placeholder="Ingrese su CI" name="ci" ><br><br>
	      <label >Contraseña</label><input type="password" placeholder="Ingrese su contraseña" name="clave" ><br><br>
	      <input type="submit" name="aceptar" value="Iniciar Sesión">
	    </form>
	</div>
</div>

</body>
</html>