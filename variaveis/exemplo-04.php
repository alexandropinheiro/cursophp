<?php
    
    $valorA = (float)$_GET["a"];
    $valorB = (float)$_GET["b"];

    $pularLinha = "<br><br>";

    echo "A soma dos valores &eacute;: " . ($valorA + $valorB) . $pularLinha;
    echo "A diferen&ccedil;a entre os valores &eacute;: ". ($valorA - $valorB) . $pularLinha;
    echo "A multiplica&ccedil;&atilde;o  entre os valores &eacute;: ". ($valorA * $valorB) . $pularLinha;

    $ip = $_SERVER["REMOTE_ADDR"];
    echo "IP: " . $ip;
?>