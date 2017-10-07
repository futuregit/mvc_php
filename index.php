<?php
//Session start
session_start();
//Include config
require('config.php');

require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');
require ('classes/Messages.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/shares.php');
require('models/users.php');

//var_dump($_GET);
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}

