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

    function fat($numero) {
        while ($numero >= 1) {
            $fatorial = $fatorial * $numero;
            $numero = $numero - 1;
        }
        echo "Fatorial: $fatorial";
    }

?>