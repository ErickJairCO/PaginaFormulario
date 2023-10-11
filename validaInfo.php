<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $pw = $_POST['pw'];
        $correo = $_POST['correo'];

        echo $nombre."<br>";
        echo $edad."<br>";
        echo $pw."<br>";
        echo $correo."<br>";

    ?>
    <a href='index.php'>Regresar</a>
</body>
</html>

