<?php
if(isset($_POST["username"]) && isset($_POST["password"])){


    if($_POST["username"] == "John" && $_POST["password"] == "Rambo" ){
        echo 'C’est pas ma guerre';
}
    else if($_POST["username"] != "John" && $_POST["password"] != "Rambo"){
        echo 'Votre pire cauchemar';
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
        <form action="./index.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password"><br><br>
            <input type="submit">
        </form>
    </main>
</body>
</html>