<html>
<head>
	<title>BIENVENIDO USUARIO</title>
    <link href="<?= base_url() ?>css/estilo.css" rel="stylesheet" />
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
        var x = document.getElementById(ci);
         x.style.display = "block";
    }
    </script> 
</head>

<body id="cuerpo" >
    <div class="d0">
        <div class="d1">
            <div class="d22">
                <h1 class="t1">INF 324 - Pregunta 1 con codeIgniter</h1>
                <div class="d3">
                    <?php 
                    $nombre = $this->session->userdata('nombre');
                    echo '<p class="t2">BIENVENID@: '.$nombre.'</p>';
                    ?>
                    <div id="74347" class="block" ><img src="img/f1.jpg" width="100px" height="100px"></div>
                    <div id="84348" class="block" ><img src="img/f2.jpg" width="100px" height="100px"></div>
                    <div id="84645" class="block" ><img src="img/f3.jpg" width="100px" height="100px"></div>
                    <?php  $ci = $this->session->userdata('ci');
                    echo '<script>perfil('.strval($ci).')</script> ';?>
                    <p class="content-text"><a href="<?= base_url() ?>bienvenida/cerrarsecion">CerrarSession</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="sele">
        <h1>Seleccione un color para cambiar el fondo de pantalla</h1>
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
