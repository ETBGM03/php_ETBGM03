<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conozca su IMC</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div class="hola">
        <h1>Cálculo realizado</h1>


        <?php
        $nombre = $_POST['nombre'];
        $pesoG = $_POST['pesoG'];
        $altura = $_POST['altura'];
        $res = ($altura * $altura);
        $pro = ($pesoG / $res);

        if ($pro <= 18.5) {
            echo 'Usted tiene bajo peso';
        } elseif ($pro > 18.5 and $pro < 24.9) {
            echo 'Usted está saludable';
        } elseif ($pro > 25.0 and $pro < 29.9) {
            echo 'Usted tiene sobrepeso';
        } elseif ($pro > 30.0 and $pro < 39.9) {
            echo 'Usted es obeso';
        } else {
            echo 'Usted tiene obesida mórbida';
        }

        ?> <br>
        El nombre del paciente es: <?php echo $nombre ?> <br>
        el IMC del paciente es: <?php echo $pro ?> <br>


    </div>

</body>

</html>