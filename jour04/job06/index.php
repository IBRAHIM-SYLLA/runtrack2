<?php
    if(isset($_GET["nombre"])){

        if ($_GET["nombre"] % 2 == 0){
            echo "Nombre Pair";
        }
        else {
            echo "Nombre impair";
        }
    }
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
    <main>
        <form action="index.php" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
            <input type="submit">
        </form>
    </main>
</body>
</html>
