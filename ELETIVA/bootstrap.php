<?php
    require_once __DIR__.'/vendor/autoload.php';

    //Aqui a gente recupera o que o usuario digitou e qual metodo HTTP ele utilizou.    
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    //Instanciar classe ROUTER
    $router = new \Aluno\Eletiva\Router($method, $path);

    //ADICIONAR AS ROTAS VALIDAS A BAIXO

    $router->get('/ola-mundo', function()
    { 
        //Ver o return como um echo
        return "Olá Mundo!";
    });




    //ADICIONAR AS ROTAS VALIDAS A CIMA

    $result = $router ->handler();

    if(!$result)
    {
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }
    echo $result($router->getParams());

