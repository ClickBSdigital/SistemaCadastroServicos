<?php
// Arquivo: public/index.php
// Este é o ponto de entrada principal do sistema

require '../app/config/config.php';
require '../app/core/Router.php';
require '../app/controllers/ServiceController.php';
require '../app/models/Service.php';
require '../app/views/layout/header.php';
require '../app/views/layout/footer.php';

$router = new Router();
$router->add('', 'ServiceController@index');
$router->add('create', 'ServiceController@create');
$router->add('store', 'ServiceController@store');
$router->add('edit', 'ServiceController@edit');
$router->add('update', 'ServiceController@update');
$router->add('delete', 'ServiceController@delete');

$router->dispatch($_GET['url'] ?? '');

?>