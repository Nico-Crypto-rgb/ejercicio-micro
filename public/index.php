<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Config/database.php'; //

$app = AppFactory::create();

// Activa esto para ver errores detallados en el navegador
$app->addErrorMiddleware(true, true, true); 

// Carga de rutas
$endpoints = require __DIR__ . '/../app/Contactos/Presentation/Routers/endpoints.php';
$endpointsAmigos = require __DIR__ . '/../app/Amigos/Presentation/routers/endpoints.php';

$endpoints($app);
$endpointsAmigos($app);

$app->run(); //