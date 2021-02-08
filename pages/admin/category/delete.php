<?php

$app = App::getInstance();

$categoryTable = $app->getTable('Category');

if(!empty($_POST)){
    $result = $categoryTable->delete($_POST['id']);
    header('Location: admin.php?page=category.param');
}




