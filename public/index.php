<?php

use SmoothDesign\Controller\Admin\AdminController;
use SmoothDesign\Controller\PageController;
use SmoothDesign\Controller\UsersController;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home.index';
}

$page = explode('.', $page);
if ($page[0] === 'admin'){
    $controller = '\SmoothDesign\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
}else{
    $controller = '\SmoothDesign\Controller\\' . ucfirst($page[0]) . 'Controller';
    $action = $page[1];
}
$controller = new $controller();
$controller->$action();