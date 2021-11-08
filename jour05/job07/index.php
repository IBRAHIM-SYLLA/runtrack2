<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="index.php">
        <p>
            <label for="str">str:</label>
            <input type="text" name="str" id="str" />

            <select name="fonction" id="fonction">
                <option value=""></option>
                <option value="gras">gras</option><?php echo gras();?>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>
            </select>


            <br /> <br />
            <input type="Submit" value="Submit" />

        </p>
    </form>
</body>
</html>

<?php
function gras()
    {
        $tab = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $space = ' ';
        if ($_GET['fonction'] == 'gras') {

            for ($i = 0; isset($_GET['str'][$i]) == true; $i++) {

                for ($x = 0; $x < 26; $x++) {

                    if ($tab[$x] == $_GET['str'][$i] )  {

                        return '<b><i>' . $_GET['str'] . '</i></b>';
                    } elseif ($_GET['str'][$i] == $space) {
                        return  $_GET['str'];
                    }
                }
            }
        }
    }


    
?>