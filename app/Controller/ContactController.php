<?php


namespace SmoothDesign\Controller;


class ContactController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Services');
        $this->loadModel('Project');
        $this->loadModel('Site');
        $this->loadModel('Realisation');
    }

    public function index(){
        $this->render('contact.index');
    }

}