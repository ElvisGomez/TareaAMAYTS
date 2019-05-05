<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Ejercicio4</title>
</head>
<body>
    <form action="#" method="POST">
        <label>Numero de empleados</label>
        <br>
        <input type="text" name="n">
        <input type="submit" name="b1">
    </form>
    <?php
    if (isset($_POST['b1'])) {
        $empleados=$_POST['n'];
        $ventas=0;
        $res=0;
        $acum=0;
    }
    ?>
</body>
</html>