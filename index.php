<?php


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Model\Pustaka\Publisher;
use Selective\BasePath\BasePathMiddleware;


require __DIR__ . '/vendor/autoload.php';


$app = AppFactory::create();
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->add(new BasePathMiddleware($app));
$app->addErrorMiddleware(true, true, true);


$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});


$app->get('/publishers/all', function (Request $request, Response $response) {
    $publishers = Publisher::all();
    $response->getBody()->write(json_encode($publishers));
    return $response;
});


$app->get('/publishers/detail/{id}', function (Request $request, Response $response, $args) {
    $id = $args['id'];
    $publisher = new Publisher();
    $publisher->detail($id);
    $response->getBody()->write(json_encode($publisher));
    return $response;
});




$app->post('/publishers/add', function (Request $request, Response $response) {
    $req_publisher = $request->getParsedBody();
    $publisher = new Publisher();
    $publisher->name = $req_publisher['name'];
    $publisher->address = $req_publisher['address'];
    $publisher->phone = $req_publisher['phone'];
    $response->getBody()->write(json_encode($publisher->save()));
    return $response;
});




$app->run();