<?php 

$nombre = "José Vilchez";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRIME TEXTO Y ETIQUETAS CON PHP</title>
</head>
<body>
    
    <?php echo"<b> INTEGRAR PHP CON HTML</b>"; ?> 

    <h1> ¡Hola <?= $nombre?>!  </h1>

    <?= "<i> ESTA ES OTRA FORMA DE IMPIRMIR TEXTO Y ETIQUETAS 
    CON PHP </i>" ?>

</body>
</html>