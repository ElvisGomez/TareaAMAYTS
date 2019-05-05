<?php
echo '<br>Los números primos comprendidos en el rango [1-1000] son';

for ($i = 0; $i <=1000; $i++) {
    $div=0;
    for ($j = 1; $j <=$i; $j++) {
        if ($i%$j==0) {
            $div++;
        }        
    }
    if ($div==2) {
            echo '<br>Número: '.$i;
        }
}

echo '<BR><BR>Los números primos comprendidos en el rango [2000-3000] son';

for ($k = 2000; $k <=3000; $k++) {
    if (($k%4==0) && (($k%100!=0)||($k%400==0))) {
        echo '<br>Año: '.$k;
    }
}

?>