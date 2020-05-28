<!DOCTYPE html>
<html>
<body>

<?php
    $var1 = 3;
    $var2 = 10;
    $var3 = 4;
    $var4 = 11;

    if($var1 < 10 && $var1 > 5) {
        echo "het getal zit tussen de 10 en de 5!";
    } else {
        echo "het getal is groter dan 10 of kleiner dan 5!";
    }

    if($var2 < 20 || $var2 > 10) {
        echo "het getal zit tussen de 10 en de 20!";
    } else {
        echo "het getal is groter dan 10 of kleiner dan 20!";
    }

    if($var3 < 10 xor $var3 > 5) {
        echo "het getal zit tussen de 10 en de 5!";
    } else {
        echo "het getal is groter dan 5 of kleiner dan 10!";
    }

    if($var1 < 20 ! $var1 > 10) {
        echo "het getal zit tussen de 10 en de 20!";
    } else {
        echo "het getal is groter dan 10 of kleiner dan 20!";
    }
    
?>  

</body>
</html>