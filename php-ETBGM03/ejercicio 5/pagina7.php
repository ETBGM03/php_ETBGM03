<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Super  descuento</h1>
    <?php
        
        $articulo = $_POST ['articulo'];
        $precio = $_POST ['precioOri'];
        $claveP = $_POST ['claveP'];
        $descuento1=($precio*0.10);
        $descuento2=($precio*0.20);
        $p1=($precio-$descuento1);
        $p2=($precio-$descuento2);
        if ($claveP == 1) {
            echo 'el valor del articulo con el descuento es: ' . $p1 . '<br>';
        }
        else {
            echo 'el valor del articulo con el descuento es: ' . $p2 . '<br>';
        }

        
    ?>
    <?php
        echo 'el nombre del articulo es: ' . $articulo . '<br>'; 
        echo 'el precio del articulo es: ' . $precio . '<br>';
        echo 'la clave del articulo es: ' . $claveP . '<br>';
    ?>
</body>
</html>