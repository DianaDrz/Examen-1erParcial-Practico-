<html>
<body>
<table border="2" ><tr>
<td><b>Chuquisaca</b></td>
<td><b>La Paz</b></td>
<td><b>Cochabamba</b></td>
<td><b>Santa Cruz</b></td>
<td><b>Beni</b></td>
<td><b>Pando</b></td>
<td><b>Tarija</b></td>
<td><b>Potosi</b></td>
<td><b>Oruro</b></td>
</tr>

<?php 
include "conexion.inc.php";
    $sql="SELECT * from notas";    
    $resultado = mysqli_query($conn,$sql);
    $conteo = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
    while($row = mysqli_fetch_array($resultado))
    {
        if($row[2]>50){
            $sql2="SELECT * from identificador where ci='$row[0]'";
            $resultadoDepto = mysqli_query($conn,$sql2);
            $fila = mysqli_fetch_array($resultadoDepto);
            switch ($fila[3]) {
                case "01":
                    $conteo[0]++;
                    break;
                case "02":
                    $conteo[1]++;
                    break;
                case "03":
                    $conteo[2]++;
                    break;
                case "04":
                    $conteo[0]++;
                    break;
                case "05":
                    $conteo[1]++;
                    break;
                case "06":
                    $conteo[2]++;
                    break;
                case "07":
                    $conteo[0]++;
                    break;
                case "08":
                    $conteo[1]++;
                    break;
            }

        }
    }
    for ($i=0; $i < 9; $i++) { 
        echo "<td>".$conteo[$i]."</td>";
    }
?>
</table>
</body>
</html>