<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    if ($n2 == 0){
        echo "nuh uh!";
        $resultado = 0;
    } else {
        $resultado = $n1 / $n2;
        $n1 = $resultado;
        echo $resultado;
    }
    
?>