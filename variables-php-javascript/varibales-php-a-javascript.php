<?php

$usuarios = array(

    array(
        
        "id" => 0,
        "username" =>"JoseVilchez"

    ),

    array(
        
        "id" => 1,
        "username" =>"JoseVilchez2"

    ),

    array(
        
        "id" => 2,
        "username" =>"JoseVilchez3"

    ),
    

);

$edad_de_Jose = 24;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>

    let users = JSON.parse('<?= json_encode($usuarios) ?>');

    let edadDeJose = <?= $edad_de_Jose ?>;
    
</script>

<script src = "./index.js" ></script>

</body>
</html>