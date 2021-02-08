<?php

$app = App::getInstance();

$servicesTable = $app->getTable('Services');

if(!empty($_POST)){
    $result = $servicesTable->delete($_POST['id']);
    header('Location: admin.php?page=service.param');
}




