<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" styl.css">
    <title>Repartido</title>
</head>

<body>
    <div class="ham">
        <h1>Porcentaje de cada departamento</h1>
        <?php

        $presupuesto = $_POST['presupuesto'];
        $pediatria = $presupuesto * 0.40;
        $pginecol = $presupuesto * 0.30;
        $taruma = $presupuesto * 0.30;



        ?>
        <?php
        echo 'el presupuesto para pediatra es:' .  $pediatria . '<br>';
        echo 'el presupuesto para Traumatología es:' .  $pginecol . '<br>';
        echo 'el presupuesto para Ginecología es:' .  $taruma;


        ?>
    </div>


</body>

</html>