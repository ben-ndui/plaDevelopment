<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}


ob_start();

if($page === 'home'){
    require ROOT . '/pages/home.php';
}elseif ($page === 'project'){
    require ROOT . '/pages/single.php';
}elseif ($page === 'services'){
    require ROOT . '/pages/service.php';
}elseif ($page === 'connexion'){
    require ROOT . '/pages/users/connexion.php';
}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

