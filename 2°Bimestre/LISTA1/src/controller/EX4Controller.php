<?php

namespace GiYu\Lista1\Controller;

class EX4Controller
{

    public static function exibir()
    {
        require_once("../src/View/EX4.php");
    }
    public static function exibirResultado()
    {
        $valor = $_POST['valor'];

        echo "O valor informado é: $valor";
        echo "<br/>";

        if($valor == 0)
        {
            echo "VALOR IGUAL A ZERO";
        } 
        if($valor < 0)
        {
            echo "VALOR NEGATIVO";
        }
        if($valor > 0 )
        {
            echo "VALOR POSITIVO";
        }
        require_once("../src/View/EX4.php");
    }

}