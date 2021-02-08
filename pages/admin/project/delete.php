<?php

$app = App::getInstance();

$projectTable = $app->getTable('Project');

if(!empty($_POST)){
    $result = $projectTable->delete($_POST['id']);
    header('Location: admin.php');
}




