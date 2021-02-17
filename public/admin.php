<?php

use Core\Auth\DbAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'homeTable';
}


// AUTH
$app = App::getInstance();
$auth = new DbAuth($app->getDb());

if (!$auth->logged()) {
    $app->forbidden();
}

ob_start();

switch ($page) {
    case 'project.param'://PROJECTS
        require ROOT . '/pages/admin/project/index.php';
        break;
    case 'project.edit':
        require ROOT . '/pages/admin/project/edit.php';
        break;
    case 'project.add':
        require ROOT . '/pages/admin/project/add.php';
        break;
    case 'project.delete':
        require ROOT . '/pages/admin/project/delete.php';
        break;
    case 'service.param'://SERVICES
        require ROOT . '/pages/admin/services/index.php';
        break;
    case 'service.edit':
        require ROOT . '/pages/admin/services/edit.php';
        break;
    case 'service.add':
        require ROOT . '/pages/admin/services/add.php';
        break;
    case 'service.delete':
        require ROOT . '/pages/admin/services/delete.php';
        break;
    case 'profil.edit'://PROFIL
        require ROOT . '/pages/admin/profil/edit.php';
        break;
    case 'apparence'://APPARENCE SITE
        require ROOT . '/pages/admin/apparence/edit.php';
        break;
    case 'connexion'://CONNEXION
        require ROOT . '/pages/users/connexion.php';
        break;
    case 'home.param'://HOME Edit
        require ROOT . '/pages/admin/home/index.php';
        break;
    case 'reference.param'://REFERENCE Edit
        require ROOT . '/pages/admin/references/references.php';
        break;
    default:
        require ROOT . '/pages/admin/dashboard/dashboard.php';
        break;

}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

