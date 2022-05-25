<?php

namespace Aluno\Eletiva\Controller;

use Aluno\Eletiva\Model\DAO\ProdutosDAO;
use Aluno\Eletiva\Model\Entity\Produtos;

class ClientesController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function inserirProduto(){
        $produto = new Produtos();
        $produto -> setDescricao($_POST['descricao']);
        $produto -> setValor($_POST['valor']);
        $produto -> setNome($_POST['nome']);
        $dao = new ProdutosDAO();
        if($dao -> inserir($produto)){
            return "Inserido com sucesso!";
        }else{
            return "Erro ao inserir";
        }
    }

}