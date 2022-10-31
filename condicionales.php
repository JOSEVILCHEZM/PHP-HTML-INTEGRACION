<?php 


$tiene_una_laptop_acer = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales </title>
</head>
<body>
     <h1> ESTO NO SE DEBERÍA HACER </h1> 

     <?php if($tiene_una_laptop_acer) { 

         echo "<p> NO ES UNA CONDICONAL CORRECTA</p>";

    }

    else {

         echo "<p> ES CONDICIONAL CORRECTA </p>";
    }
 
    

    ?>

    <h1> ESTO ES ACEPTABLE </h1>

    <?php if ($tiene_una_laptop_acer) {?>
        <b>😢</b>

    <?php } else { ?>
        <b>😁</b> 
    <?php } ?>


    <h1> ESTO SE DEBERÍA HACER</h1>


   <?php if ($tiene_una_laptop_acer): ?>
        <b>😢</b>

    <?php  else : ?>
        <b>😁</b> 
    <?php endif;?>

    

</body> 
</html>