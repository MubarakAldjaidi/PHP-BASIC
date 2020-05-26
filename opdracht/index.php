<!DOCTYPE html>
<html>
<body>

<?php
    $test1 = 10;
    $test2 = 8;
    
    if($test1 != $test2) {
        echo "de vergelijking is ongelijk!";
    }

    $test3 = 10;
    $test4 = 10;

    if($test3 === $test4) {
        echo "de vergelijking is identiek!";
    }
    
    $test5 = 10;
    $test6 = 8;
    
    if($test5 > $test6) {
        echo "de vergelijking is groter!";
    }

    $test7 = 10;
    $test8 = 10;
    
    if($test7 >= $test8) {
        echo "de vergelijking is groter/gelijk!";
    }

?>  

</body>
</html>