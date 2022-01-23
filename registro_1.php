<?php

$conn = mysqli_connect("localhost","root","","prueba3");

$tit1=  $_POST['titulo'];
$des1 = $_POST['des'];

if (!$conn) {

    die ("Conexion fallida" . mysqli_connect_error());
            }
    
    $sql="INSERT INTO noticias VALUES ('$tit1','$des1')";
    $resultado= mysqli_query($conn, $sql) or die ("ERROR AL EJECUTAR LA CONSULTA");

mysqli_close($conn);
    

    echo "<br> Usted a ingresado los siguientes datos: <br>";
    echo "<br>TITULO: $tit1<br> ";
    echo "<br>NOTICIA: $des1<br>";
      ?>
