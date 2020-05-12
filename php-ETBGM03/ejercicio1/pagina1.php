<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir datos</title>
    <link rel="stylesheet" href="esttilos2.css">
</head>

<body>
    <div class="div02">
        <h1>Su promedio de nota es:</h1>
        <?php
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $notafinal = $_POST['notafinal'];
        $notatrabajofinal = $_POST['notatrabajofinal'];

        $det = ($nota1 + $nota2 + $nota3) / 3;
        $res = ($det * 0.35);

        $nof = ($notafinal * 0.35);
        $trano = ($notatrabajofinal * 0.30);

        $final = ($res + $nof + $trano);

        if ($final >= 3.0) {
            echo 'usted aprovó';
        } else {
            echo 'usted no aprovó';
        }

        ?>

        Su nota definitiva es: <?php echo $final ?>

    </div>



</body>

</html>
