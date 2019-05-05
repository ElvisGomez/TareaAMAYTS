<?php


 echo "<h4>Conversion de acres a hectares</h4>";

 $acres = 1000;
 $hectarea = 1.0;

 echo "El numero de acres son: " . $acres;
 echo "<br><br>";

 $conversion = 0;
 $conversion = round($acres*($hectarea/2.4711),2);

 echo $acres . " acres son " . $conversion . " hectareas."; 
?>



