<?php

use Core\Auth\DbAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}


// AUTH
$app = App::getInstance();
$auth = new DbAuth($app->getDb());

if(!$auth->logged()){
    $app->forbidden();
}



ob_start();
if($page === 'home'){
    require ROOT . '/pages/admin/project/index.php';
}elseif ($page === 'project'){
    require ROOT . '/pages/single.php';
}elseif ($page === 'project.edit'){
    require ROOT . '/pages/admin/project/edit.php';
}elseif ($page === 'project.add'){
    require ROOT . '/pages/admin/project/add.php';
}elseif ($page === 'project.delete'){
    require ROOT . '/pages/admin/project/delete.php';
}elseif ($page === 'service.edit'){
    require ROOT . '/pages/admin/services/edit.php';
}elseif ($page === 'connexion'){
    require ROOT . '/pages/users/connexion.php';
}elseif ($page === 'admin'){
    require ROOT . '/pages/admin/project/index.php';
}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

