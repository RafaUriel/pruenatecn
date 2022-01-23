<?php
    
$conexion = mysqli_connect("localhost","root","","prueba3");    

$sql = "SELECT * FROM noticias";   

$resul= mysqli_query($conexion, $sql);

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8"/>
    <link href="formato.css" rel="stylesheet"/>
    <title>NOTICIAS</title>
</head>

<body>
    <div id="cuerpo">
    <table>
        <tr>
            <th>TITULO</th>
            <th>NOTICIA</th>
        </tr>
        <?php
        while ($mostrar=mysqli_fetch_array($resul)){
          ?>
        <tr>
            <td>
                <?php
                echo $mostrar['noti'];
                ?>
            </td>
            <td>
                <?php
                echo $mostrar['descr'];
            ?>
            </td>
            </tr>

        <?php
                                                    }
         
        ?>

    </table>
    </div>
</body>

</html>
