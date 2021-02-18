<?php


namespace Core\Controller;


class Controller{

    protected $viewpath;
    protected $template;

    protected function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewpath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewpath . 'templates/' . $this->template . '.php');
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