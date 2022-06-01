<?php

namespace GiYu\Lista1\Controller;

class EX5Controller
{

    public static function exibir()
    {
        require_once("../src/View/EX5.php");
    }
    public static function exibirResultado()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor4 = $_POST['valor4'];

        $media = ($valor1 + $valor2 + $valor3 + $valor4) / 4;

        echo "A média é: $media";
        echo "<br/>";


        if($media >= 7)
        {
            echo "APROVADO";
        } 
        else
        {
            echo "REPROVADO";
        }
        require_once("../src/View/EX5.php");
    }

}