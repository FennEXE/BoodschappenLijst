<?php

//require 'core/bootstrap.php';
//require 'core/router.php';

//$router = [];

/*
$router->define([
	'' => 'controllers/index.php',
	'index' => 'controllers/index.php',
	'test' => 'controllers/test.php',
	'names' => 'controllers/add-name.php',
	'groceries' => 'controllers/groceries.php',
	'insert' => 'controllers/insertSQL.php'
	]);
*/



$router->get('', 'controllers/index.php');
$router->get('index', 'controllers/index.php');
$router->get('test', 'controllers/test.php');
$router->post('names', 'controllers/add-name.php');
$router->get('groceries', 'controllers/groceries.php');
$router->post('dynDelete', 'controllers/grocerySQL/dynDelete.php');
$router->post('dynUpdate', 'controllers/grocerySQL/dynUpdate.php');
$router->post('dynInsert', 'controllers/grocerySQL/dynInsert.php');


/* for refactoring
$router->get('', 'home');
$router->get('index', 'controllers/index.php');
$router->get('test', 'controllers/test.php');
$router->post('names', 'controllers/add-name.php');
$router->get('groceries', 'controllers/groceries.php');
$router->post('insert', 'controllers/grocerySQL/insertGrocery.php');
$router->post('update', 'controllers/grocerySQL/updateGrocery.php');
$router->post('delete', 'controllers/grocerySQL/deleteGrocery.php');
*/
//var_dump($router->routes);