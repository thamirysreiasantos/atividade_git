<?php
  
    function soma($numero1, $numero2){
        $resultado = $numero1 + $numero2;
        return $resultado;
    }

    function sub($num1, $num2) {
        $subtracao = $num1 - $num2;
        echo "Resultado: " . $subtracao;
    }

    function multiplicacao ($num1, $num2){
        $resultado = $num1 * $num2;
        echo "resultado é $resultado";
    }


    function media($num1,$num2,$num3,$num4) {
        $media = ($num1 + $num2 + $num3 + $num4)/4;
        echo "Média: " . number_format($media, 1,',',"");
    }


    function fat($numero) {
        $fatorial = 1;
        for ($i=$numero  ; $i >= 1 ; $i-- ) { 
            echo "Contagem: $i <br>";
    
            $fatorial = $i * $fatorial;
    
    
        }
    
        echo "fatorial: $fatorial";
    }

    function divisao ($num1, $num2){
        if ($num2 != 0){
            $resultado = $num1/$num2;
            echo "Resultado é $resultado";
        }
        else {
            echo "não podera dividir por zero";
        }
    }


?>
