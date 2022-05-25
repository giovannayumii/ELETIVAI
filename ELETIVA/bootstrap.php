<?php

    require_once __DIR__ . "/vendor/autoload.php";

    //AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

    $method = $_SERVER["REQUEST_METHOD"];
    $path = $_SERVER["PATH_INFO"];

    //INSTANCIAR CLASSE ROUTER

    $router = new \Aluno\Eletiva\Router($method, $path);

    //ADICIONAR AS ROTAS VÁLIDAS ABAIXO

    $router->get("/ola-mundo", function(){
        return "Olá Mundo!";
    });

    $router->get('/cliente/novo','Aluno\Eletiva\Controller\ClientesController::abrirFormularioInserir');
    $router->post('/cliente/inserir','Aluno\Eletiva\Controller\ClientesController::inserirCliente');

    $router->get('/produto/novo','Aluno\Eletiva\Controller\ProdutoController::abrirFormularioInserir');
    $router->post('/produto/inserir','Aluno\Eletiva\Controller\ProdutoController::inserirProduto');

    $router->get('/exemplo','Aluno\Eletiva\Controller\ExercicioController::exibir');
    $router->post("/exemplo-resultado", 'Aluno\Eletiva\Controller\ExercicioController::exibirResultado');

    $router->get('/clientes','Aluno\Eletiva\Controller\ClientesController::abrirListaClientes');

    //ADICIONAR AS ROTAS VÁLIDAS ACIMA

    $result = $router->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
        }

    echo $result($router->getParams());

?>
