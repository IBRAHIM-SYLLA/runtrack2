
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <title>Document</title>
         <?php
    if (isset($_GET['style']) == true){
        if ($_GET['style'] == 'style1'){
            echo  '<link rel="stylesheet" href="css/style1.css">';
    }
    else if ($_GET['style'] == 'style2'){
        echo  '<link rel="stylesheet" href="css/style2.css">';
}
    else if ($_GET['style'] == 'style3'){
    echo  '<link rel="stylesheet" href="css/style3.css">';
}
}
?>


</head>
<body>
<form action="index.php" method="get">
<select name="style" id = "style">
<option>style1</option>
<option>style2</option>
<option>style3</option>
</select>
    <input type="submit" value="Submit">
</form>
</body>
</html>

