<?php

require __DIR__ . '/vendor/autoload.php';  

header('Access-Control-Allow-origin: *');
header('Content-type: application/json');
header('Content-type: charset=utf-8');
date_default_timezone_set("America/Sao_Paulo");

use api\url\urlActions;

use api\clientes\clientesAction;

$cliente = new clientesAction;


if (isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);
    $urlaction = new urlActions($path);
} else {
    echo 'Caminho não encontrado';
    exit;
}

$urlaction::methodRequestGet($_SERVER['REQUEST_METHOD']);

$cliente->listGet();
