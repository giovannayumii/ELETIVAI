<?php


require_once __DIR__ . "/vendor/autoload.php";

//AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//INSTANCIAR CLASSE ROUTER

$router = new GiYu\Eletiva\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get("/ola-mundo", function(){
    return "Olá Mundo!";
});

$router->get('/cliente/novo','GiYu\Eletiva\Controller\ClientesController::abrirFormularioInserir');
$router->post('/cliente/inserir','GiYu\Eletiva\Controller\ClientesController::inserirCliente');

$router->get('/clientes','GiYu\Eletiva\Controller\ClientesController::abrirListaClientes');

$router->get('/cliente/alterar/{id}','GiYu\Eletiva\Controller\ClientesController::abrirFormularioAlterar');

$router->post('/cliente/editar/{id}','GiYu\Eletiva\Controller\ClientesController::editarCliente');

$router->get('/cliente/excluir/{id}','GiYu\Eletiva\Controller\ClientesController::excluirCliente');


$router->get('/produto/novo','GiYu\Eletiva\Controller\ProdutoController::abrirFormularioInserir');
$router->post('/produto/inserir','GiYu\Eletiva\Controller\ProdutoController::inserirProduto');

$router->get('/produtos','GiYu\Eletiva\Controller\ProdutoController::abrirListaProdutos');

$router->get('/produto/alterar/{id}','GiYu\Eletiva\Controller\ProdutoController::abrirFormularioAlterar');

$router->post('/produto/editar/{id}','GiYu\Eletiva\Controller\ProdutoController::editarProduto');

$router->get('/produto/excluir/{id}','GiYu\Eletiva\Controller\ProdutoController::excluirProduto');


$router->get('/exemplo','GiYu\Eletiva\Controller\ExercicioController::exibir');

$router->post("/exemplo-resultado", 'GiYu\Eletiva\Controller\ExercicioController::exibirResultado');
//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());