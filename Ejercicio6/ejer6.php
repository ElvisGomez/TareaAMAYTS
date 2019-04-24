<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n = $_POST["n"];
        $factorial=1;
        
        if(isset($_POST['b1']))
        {
            for($i=2;$i<=$n;$i++)
            {
                $factorial*=$i;
            }
            echo '<div class="container-fluid"><div class=col-sm-2>El factorial de '.$n.' es :'.$factorial.'</div></div>';
        }
        else {
            echo '<H1 align=center>Los datos ingresados son incorrectos</H2>';
        }
        ?>
    </body>
</html>
