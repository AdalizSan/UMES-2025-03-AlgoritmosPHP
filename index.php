<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PW1 Clase 21/03/2025 </title>
</head>
<body>
    <?php
        echo "--------------------------------------<br />";
        
        echo "NUMEROS PRIMOS<br />";
        
        $numero = 1;
        while ($numero <= 1000) {
            $NumPrimo = true;
            $divisor = 2;
            if ($numero == 1) {
                $NumPrimo = false;
            } else {
                while ($divisor <= $numero / 2) {
                    if ($numero % $divisor == 0) {
                        $NumPrimo = false;
                        break;
                    }
                    $divisor++;
                }
            }
            if ($NumPrimo == true) {
                echo $numero . "<br />";
            }
            
            $numero++;
        }
        
        echo "<br />------------------------------------";
        
        echo "<br />IMPRIMIR ASTERISCOS<br />";
        
        $numero = 1;
        $asteris = "*";

        while ($numero < 6) {
            echo $asteris . "<br />"; 
            $asteris = $asteris ."*"; 
            $numero++;

            if ($numero == 6) {
                echo "+++++<br />" ; 

                while ($numero > 0) {
                    if ($numero < 6) {
                        $contaAsterisco = 0;
                        while ($contaAsterisco < $numero) {
                            echo "*";
                            $contaAsterisco++;
                        }
                        echo "<br />";
                    }
                    $numero--;
                }
                break;
            }
        }
    ?>
</body>
</html>
