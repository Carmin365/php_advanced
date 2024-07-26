<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require _DIR_ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/users', function (Request $request, Response $response, array $args) {
    // Lógica para buscar todos os usuários
    $usuarios = [
        ['id' => 1, 'name' => 'Peter'],
        ['id' => 2, 'name' => 'Mary']
    ];
    $response->getBody()->write(json_encode($users));
    return $response;
});

$app->run();
?>