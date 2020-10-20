<html>
<head>
  <title>login</title>
  <link href="estilos.css" rel="stylesheet" />
</head>
<body id="inicio">
	<div class="d0">
        <div class="d1">
            <div class="d2">
                <h1 class="t1">UMSA - PRIMER EXAMEN PARCIAL INF -324</h1>
                <div class="d3">
                    <img class="fotog" src="imagenes/usuarioGlobal.jpg">
                </div>
            </div>
        </div>
    </div>
	<div id="a1">
	    <form action="autentificacion.php" method="POST">
	    	<h2>INICIAR SECIÓN</h2>
	      <label>Usuario</label><input type="text" placeholder="Ingrese su CI" name="ci" ><br><br>
	      <label >Contraseña</label><input type="password" placeholder="Ingrese su contraseña" name="clave" ><br><br>
	      <input type="submit" name="aceptar" value="Iniciar Sesión">
	    </form>
	</div>
</body>
</html>
