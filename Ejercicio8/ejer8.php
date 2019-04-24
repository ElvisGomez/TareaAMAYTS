<?php
        $num = $_POST['num'];
        $contaMacero = 0;
        $acumPos = 0;
        $promPos;
        $acumNeg = 0;
        $contaNeg = 0;
        $promNum;
        
        if (isset($_POST['b2'])) {
            
            for ($i=0;$i<count($num);$i++)
            {
                if ($num>0) {
                $contaMacero++;
                $acumPos=$acumPos+$num;
                }
                else if ($num<0) {
                    $acumNeg+=num;
                    $contaNeg++;
                }                
            }
            $promPos=$acumPos/$contaMacero;
            $promNum=($acumNeg+$acumPos)/count($num);
            if($contaMacero!=0){
                echo '<br>La cantidad de números mayores que cero fue: '.$contaMacero;
                echo '<br>Total de números positivos fue: '.$contaMacero;
                echo '<br>El promedio de números positivos fue: '.$promPos;                
            }
            else {
                echo 'No se ingresaron números positivos';
            }
            if($contaNeg!=0){                
                echo '<br>Total de números negativos fue: '.$contaNeg;                
            }
            else {
                echo 'No se ingresaron números negativos';
            }
            echo 'El `promedio de los números ingresados es: '.$promNum;
        }
?>