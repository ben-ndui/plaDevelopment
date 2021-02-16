<?php

use Core\Auth\DbAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'homeTable';
}


// AUTH
$app = App::getInstance();
$auth = new DbAuth($app->getDb());

if(!$auth->logged()){
    $app->forbidden();
}

ob_start();
if($page === 'homeTable'){
    require ROOT . '/pages/admin/dashboard/dashboard.php';
}elseif ($page === 'project.param'){//PROJECTS
    require ROOT . '/pages/admin/project/index.php';
}elseif ($page === 'project.edit'){
    require ROOT . '/pages/admin/project/edit.php';
}elseif ($page === 'project.add'){
    require ROOT . '/pages/admin/project/add.php';
}elseif ($page === 'project.delete'){
    require ROOT . '/pages/admin/project/delete.php';
}elseif ($page === 'service.param'){//SERVICES
    require ROOT . '/pages/admin/services/index.php';
}elseif ($page === 'service.edit'){
    require ROOT . '/pages/admin/services/edit.php';
}elseif ($page === 'service.add'){
    require ROOT . '/pages/admin/services/add.php';
}elseif ($page === 'service.delete'){
    require ROOT . '/pages/admin/services/delete.php';
} elseif ($page === 'category.param'){//CATEGORY
    require ROOT . '/pages/admin/category/index.php';
}elseif ($page === 'category.edit'){
    require ROOT . '/pages/admin/category/edit.php';
}elseif ($page === 'category.add'){
    require ROOT . '/pages/admin/category/add.php';
}elseif ($page === 'category.delete'){
    require ROOT . '/pages/admin/category/delete.php';
}elseif ($page === 'profil.edit'){//PROFIL
    require ROOT . '/pages/admin/profil/edit.php';
}elseif ($page === 'apparence'){//APPARENCE SITE
    require ROOT . '/pages/admin/apparence/edit.php';
}elseif ($page === 'connexion'){//CONNEXION
    require ROOT . '/pages/users/connexion.php';
} elseif ($page === 'home.param'){//HOME Edit
    require ROOT . '/pages/admin/home/index.php';
}elseif ($page === 'reference.param'){//REFERENCE Edit
    require ROOT . '/pages/admin/references/references.php';
}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

