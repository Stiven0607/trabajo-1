<?php
$marca=$_GET['marca'];
$modelo=$_GET['modelo'];
$año=$_GET['año'];
$cilindrada=$_GET['cilindrada'];

require_once __DIR__. '/motocicleta.php';
$moto = new motocicleta ($marca, $modelo, $año, $cilindrada);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auto</title>
</head>
<body class="bg-danger" data-bs-theme="dark">
    <?php
     include("../navbar.html");
    ?>
    <div class="container">
        <h1 class="bg-dark text-primary text-center p-3 fw-boldd">
            registrar vehiculo
        </h1>
        <?php
        echo "<h1>" . $moto->obtenerInformacion() ;
$moto->hacerCaballito(); // No se puede porque está apagada
$moto->encender();
$moto->hacerCaballito();


        ?>
    </div>
    
</body>