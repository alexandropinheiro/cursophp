<?php

    $nome = "Batatinha";

    function teste(){
        global $nome;
        echo "Valor da vari&aacute;vel dentro de teste: " . $nome;
    }

    function teste2(){
        $nome = "Matheus";
        echo "Valor da vari&aacute;vel dentro de teste2: " . $nome;
    }

    teste();
    echo "<br>";
    teste2();

?>