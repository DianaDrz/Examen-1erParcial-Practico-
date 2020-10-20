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
?>
<html>
<head>
	<title>BIENVENIDO USUARIO</title>
    <link href="estilos.css" rel="stylesheet" />
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
        function perfil(ci){
            console.log("1")
            var x = document.getElementById(ci);
            console.log("2")
            x.style.display = "block";
            console.log("3")
        }
        
    </script>
</head>

<body id="cuerpo">
    <div class="d0">
        <div class="d1">
            <div class="d22">
                <h1 class="t1">INF 324 - Pregunta 1</h1>
                <div class="d3">
                    <?php echo '<p class="t2">BIENVENID@: '.$nombre.'</p>' ;
                    ?>
                    <div id="74347" class="block" ><img src="imagenes/p1.jpg" width="100px" height="100px"></div>
                    <div id="84348" class="block" ><img src="imagenes/p2.jpg" width="100px" height="100px"></div>
                    <div id="84645" class="block" ><img src="imagenes/p3.jpg" width="100px" height="100px"></div>
                    <div id="94449" class="block" ><img src="imagenes/p4.jpg" width="100px" height="100px"></div>
                    <?php echo '<script>perfil('.strval($ci).')</script> ';?>
                    <p class="content-text"><a href="cerrar.php">CerrarSession</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="sele">
        <h2>Seleccione un color para cambiar el fondo de pantalla</h2>
        <select  id="color" class="sel" onchange="fondo(this)">
            <option value="#4B4D4C">Color por defecto</option>  
            <option value="red">Rojo</option>
            <option value="yellow">Amarillo</option>
            <option value="blue">Azul</option>
            <option value="pink">Rosado</option>
        </select>
    </div>
</body>
</html>
