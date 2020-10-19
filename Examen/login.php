
<html>
<head>
	<title>BIENVENIDO USUARIO</title>
    <link href="style.css" rel="stylesheet" />
    <style >
    .block{
        display: none;
    }
    </style>
    <script type="text/javascript">
        function fondo(z){
            var cuerpo=document.getElementById("cuerpo");
            cuerpo.style.backgroundColor=z.value;
        }
        function myFunction(ci){
            console.log("1")
            var x = document.getElementById(ci);
            console.log("2")
            x.style.display = "block";
            console.log("3")
        }
        
    </script>
</head>

<body id="cuerpo">

    <div id="74347" class="block" ><img src="imagen1.jpg" width="300" height="150"></div>
    <div id="84348" class="block" ><img src="imagen2.jpg" width="300" height="150"></div>
    <div id="94449" class="block" ><img src="imagen3.jpg" width="300" height="150"></div>

	<h2>Seleccione un color</h2>
	<select name="color" id="color" onchange="fondo(this)">  
        <option value="red">Rojo</option>
        <option value="yellow">Amarillo</option>
        <option value="blue">Azul</option>
	</select>	
</body>
</html>
<?php
    include "conexion.inc.php";
    session_start();
    if(!isset($_SESSION['ci'])){
        header("Location: index.php"); 
    }
    $ci=$_SESSION['ci'];
    $sql=mysqli_query($conn,"SELECT * FROM identificador WHERE ci='$ci'");
    $fila=mysqli_fetch_row($sql);
    $nombre=$fila[1];
    echo "BIENVENIDO USUARIO: ".$nombre;
    echo '<script>myFunction('.strval($ci).')</script> ';
?>