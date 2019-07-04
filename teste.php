<?php

    require "index.php";

    $num1 = $_GET['n1'];
    $num2 = $_GET['n2'];
    $funcao = $_GET['f'];

    if($funcao == "multiplicacao"){
        multiplicacao($num1,$num2);
    }
    elseif ($funcao == "sub") {
        sub($num1,$num2);
    }
    elseif ($funcao == "soma") {
        soma($num1,$num2);
    }
    elseif ($funcao == "divisao") {
        divisao($num1,$num2);
    }

