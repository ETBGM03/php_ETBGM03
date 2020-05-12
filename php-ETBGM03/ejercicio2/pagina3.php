<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir datos</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <div id="nom">
        <h1>Nómina Automóvil</h1>
        <?php
        $nombre = $_POST['nombre'];
        $autovendido = $_POST['autovendido'];
        $precioA = $_POST['precioA'];
        $salario = (450000);
        $comi = (50000);
        $pro = ($autovendido * $comi);
        $venta = ($precioA * 5/100);
        $ST = ($pro + $venta + $salario);
        ?>
        nombre del vendedor es: <?php echo $nombre ?>
        su salario total es: <?php echo $ST ?>
    </div>

</body>

</html>