<?php
        
        $codEmp = $_POST['codEmp'];
        $nomEmp= $_POST['nomEmp'];
        $sueldoEmp = $_POST['sueldoEmp'];
        $nueSueldo = array();
        $au1 = 0.15;
        $au2 = 0.12;
        $au3 = 0.09;
        $montAum = 0.0;
        $monTotal = 0.0;
        
        if (isset($_POST['b2'])) {
            
            for ($i=0;$i<count($codEmp);$i++)
            {
                if ($sueldoEmp[$i]>0 && $sueldoEmp[$i]<650) {
                $nueSueldo[$i]=$sueldoEmp[$i] + ($sueldoEmp[$i]*$au1);
                $monTotal+=$nueSueldo[$i];
                $montAum+=($sueldoEmp[$i]*$au1);
                }
                else if ($sueldoEmp[$i]>=650 && $sueldoEmp[$i]<=1000) {
                    $nueSueldo[$i]=$sueldoEmp[$i] + ($sueldoEmp[$i]*$au2);
                    $monTotal+=$nueSueldo[$i];
                    $montAum+=($sueldoEmp[$i]*$au2);
                }
                else if ($sueldoEmp[$i]>1000) {
                    $nueSueldo[$i]=$sueldoEmp[$i] + ($sueldoEmp[$i]*$au3);
                    $monTotal+=$nueSueldo[$i];
                    $montAum+=($sueldoEmp[$i]*$au3);
                }
                else//22.5 78 120
                {
                    echo '';
                }
            }
            
            for ($i=0;$i<count($codEmp);$i++){
                echo '<br>Nombre: '.$nomEmp[$i];
                echo '<br>Código del empleado: '.$codEmp[$i];
                echo '<br>Sueldo principal del empleado: '.$sueldoEmp[$i];
                echo '<br>Nuevo sueldo: '.$nueSueldo[$i]."<br><br><br>";
            }
            echo '<br>El total de la planilla es: '.$monTotal;
            echo '<br>El monto de los aumentos es: '.$montAum;
        }
?>