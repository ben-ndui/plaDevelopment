<?php


namespace SmoothDesign\Controller;


class ReferencesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Services');
        $this->loadModel('Project');
        $this->loadModel('Site');
        $this->loadModel('Realisation');
    }

    public function index(){
        $realisation = $this->Realisation->findWithName('Réalisation');
        $projects = $this->Project->getProjectIMG();

        $this->render('references.index', compact('realisation', 'projects'));
    }

}