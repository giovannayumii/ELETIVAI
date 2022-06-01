<?php

namespace GiYu\Lista1\Controller;

class EX3Controller
{

    public static function exibir()
    {
        require_once("../src/View/EX3.php");
    }
    public static function exibirResultado()
    {
        $valor = $_POST['valor'];

        echo "O valor informado é: $valor";
        echo "<br/>";

        if($valor > 10)
        {
            echo "O valor é maior que 10";
        } 
        else
        {
            echo "O valor é menor que 10";

        }
        require_once("../src/View/EX3.php");
    }

}