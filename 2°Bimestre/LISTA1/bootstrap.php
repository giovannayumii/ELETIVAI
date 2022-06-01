<?php


require_once __DIR__ . "/vendor/autoload.php";

//AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//INSTANCIAR CLASSE ROUTER

$router = new GiYu\Lista1\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get("/LISTAPHP2BIMESTRE", function()
{
    return "LISTA DO 2°BIMESTRE!";
});

$router->get('/EX1','GiYu\Lista1\Controller\EX1Controller::exibir');
$router->post('/1-resultado', 'GiYu\Lista1\Controller\EX1Controller::exibirResultado');

$router->get('/EX2','GiYu\Lista1\Controller\EX2Controller::exibir');
$router->post('/2-resultado', 'GiYu\Lista1\Controller\EX2Controller::exibirResultado');

$router->get('/EX3','GiYu\Lista1\Controller\EX3Controller::exibir');
$router->post('/3-resultado', 'GiYu\Lista1\Controller\EX3Controller::exibirResultado');

$router->get('/EX4','GiYu\Lista1\Controller\EX4Controller::exibir');
$router->post('/4-resultado', 'GiYu\Lista1\Controller\EX4Controller::exibirResultado');

$router->get('/EX5','GiYu\Lista1\Controller\EX5Controller::exibir');
$router->post('/5-resultado', 'GiYu\Lista1\Controller\EX5Controller::exibirResultado');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());