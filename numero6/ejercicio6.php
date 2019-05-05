<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        f(isset($_POST['calcular']))
            {
                $num = $_POST['num'];
                
                while($num!=1)
                {
                    if($num%2==0)
                    {
                        $num= $num/2;
                    }
                    else
                    {
                        $num = $num *3+1;
                    }
                    
                    echo $num , ", ";
                }
            }
            echo " ";
        ?>
    </body>
</html>
