<?php

namespace GiYu\Eletiva\Controller;

use GiYu\Eletiva\Model\DAO\ProdutosDAO;
use GiYu\Eletiva\Model\Entity\Produtos;

class ProdutoController
{
    public static function abrirFormularioInserir()
    {
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params)
    {
        $dao = new ProdutosDAO();
        $resultado = $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_produto.php";
    }

    public static function abrirListaProdutos()
    {
        $dao = new ProdutosDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produto.php";
    }

    public static function inserirProduto()
    {
        $produto = new Produtos();
        $produto -> setDescricao($_POST['descricao']);
        $produto -> setValor($_POST['valor']);
        $produto -> setNome($_POST['nome']);
        $dao = new ProdutosDAO();

        if($dao -> inserir($produto))
        {
            $resposta = true;
        }
        else
        {
            $resposta = false;
        }
        ProdutoController::abrirListaProdutos();
    }

    public static function editarProduto($params)
    {
        $produto = new Produtos();
        $produto -> setDescricao($_POST['descricao']);
        $produto -> setValor($_POST['valor']);
        $produto -> setNome($_POST['nome']);
        $produto -> setId($params[1]);
        $dao = new ProdutosDAO();

        if ($dao -> alterar($produto)){
            $resposta = true;
        } 
        else 
        {
            $resposta = false;
        }
        ProdutoController::abrirListaProdutos();
    }
    
    public static function excluirProduto($params)
    {
        $dao = new ProdutosDAO();

        if ($dao->excluir($params[1]))
        {
            $resposta = true;
        } 
        else 
        {
            $resposta = false;
        }
        ProdutoController::abrirListaProdutos();
    }
    
}