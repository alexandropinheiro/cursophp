<?php

    $anoNascimento = 1979;

    $nomeCompleto = "Alexandro R Pinheiro";

    $nome1 = "Heitor";

    //Linha de comentário

    /* 
    Comentário de bloco
    */

    echo $nomeCompleto . ", nascido no ano de ". $anoNascimento ." - ". $nome1;
    echo "<br><br>";
    unset($nome1);
    echo "Nome: " . (isset($nome1) ? $nome1 : "string vazia");

?>