<?php
$value = "";
$key = ""
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <table>
            <thead>
                <th>argument</th>
                <th>valeur</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php foreach($_GET as $key => $value)
                            echo $key."<br>"?>>
                        </td>
                        <td>
                            <?php foreach($_GET as $key => $value)
                            echo $value."<br>"?>
                        </td>
                </tr>
            </tbody> 
        </table>
        <form action="./index.php" method="get">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <input type="submit">
        </form>
    </main>
</body>
</html>