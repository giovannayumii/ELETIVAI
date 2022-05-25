<?php

namespace Aluno\Eletiva\Controller;

use Aluno\Eletiva\Model\DAO\ClientesDAO;
use Aluno\Eletiva\Model\Entity\Clientes;

class ClientesController{
    
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente -> setEmail($_POST['email']);
        $cliente -> setIdade($_POST['idade']);
        $cliente -> setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if($dao -> inserir($cliente)){
            $resposta = true;
            require_once "../src/View/listar_clientes.php";
            return "Inserido com sucesso!";
        }else{
            return "Erro ao inserir";
        }
    }

}