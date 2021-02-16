<?php

use Core\Config;
use Core\Database\MySQLDatabase;

class App{

    public $title = "Patrice LARMOYER";
    private $db_instance;
    private static $_instance;

    public static function getInstance(){
        if (is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        SmoothDesign\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function getTable($name){
        $class_name = '\\SmoothDesign\\Table\\' . ucfirst($name . 'Table');
        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MySQLDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit !');
    }

    public function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('PageTable introuvable !');
    }

}