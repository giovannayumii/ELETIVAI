<?php

namespace GiYu\Lista1\Controller;

class EX2Controller
{

    public static function exibir()
    {
        require_once("../src/View/EX2.php");
    }
    public static function exibirResultado()
    {
        $valorQuilo = $_POST['valorQuilo'];
        $valorQuantidade = $_POST['valorQuantidade'];

        echo "Valor do quilo é: $valorQuilo, a quantidade de quilos é : $valorQuantidade";
        echo "<br/>";

        $valorTotal = $valorQuilo * $valorQuantidade;
        echo "O valor total a ser pago é: $valorTotal";

        require_once("../src/View/EX2.php");
    }

}