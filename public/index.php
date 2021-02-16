<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'homeTable';
}


ob_start();

if($page === 'homeTable'){
    require ROOT . '/pages/home.php';
}elseif ($page === 'project'){
    require ROOT . '/pages/single.php';
}elseif ($page === 'realisation'){
    require ROOT . '/pages/service.php';
}elseif ($page === 'contact'){
    require ROOT . '/pages/contact.php';
}elseif ($page === 'connexion'){
    require ROOT . '/pages/users/connexion.php';
}elseif ($page === 'references'){
    require ROOT . '/pages/references.php';
}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

