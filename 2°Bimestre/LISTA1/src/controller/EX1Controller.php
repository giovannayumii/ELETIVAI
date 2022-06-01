<?php

namespace GiYu\Lista1\Controller;

class EX1Controller
{

    public static function exibir()
    {
        require_once("../src/View/EX1.php");
    }
    public static function exibirResultado()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        echo "Valor pago é: $valor1 e o valor do produto é : $valor2";
        echo "<br/>";

        if($valor1 - $valor2 == 0)
        {
            echo "Não tem troco";
        } 
 
        echo "<br/>";

        if($valor2 - $valor1 != 0)
        {
            $troco = $valor1 - $valor2;
            echo " O troco é : $troco";
        }
        require_once("../src/View/EX1.php");
    }

}