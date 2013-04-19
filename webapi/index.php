<?php
require 'vendor/autoload.php';

// create new Slim instance
$app = new \Slim\Slim(array(
    "MODE" => "development",
    "TEMPLATES.PATH" => "./templates"
));

// add new Route 
$app->get("/", function () {	
    echo json_encode(array(1,2,3,4,5,6));
});


	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';


$app->get("/add10/:id", function ($id) {
    echo "<h1>$id Hellos</h1>";
});
// run the Slim app

$app->notFound(function () use ($app) {
    $app->render('404.html');
});

$app->run();