<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculos con números</title>        
        <meta name="viewport" content="width=device-width,Initial-scale=1,Maximun-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    </head>
    <body>
        <form action="#" method="POST">
            <label>Digite la cantidad de números que desea clacular</label>
                <input type="text" name="n"><br>
                <input type="submit" name="b1" value="Enviar">
        </form>
<?php

    if (isset($_POST['b1'])) {
        $n = $_POST['n'];
        
        echo '<form action=ejer8.php method=POST>';
        for ($i = 0; $i<$n; $i++) {
            echo '<br><br>Un número entero ['.($i + 1) ."]<input type=text name=num[]>";            
        }
        echo "<input type=submit name=b2 value=Enviar>";
        echo "</form>";
    }
    else
    {
        echo " ";
    }
?>        
    </body>
</html>


