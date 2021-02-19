<?php


namespace SmoothDesign\Controller;

class PrestationsController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Prestation');
    }

    public function index()
    {

        $page = $this->Page->getPage('Prestation');

        //var_dump($page);
        $this->render('prestations.index', compact( 'page'));

    }

    public function contact(){
        $this->render('contact.index');
    }


    /**
     * Permet de voir une page en particulier
     */
    public function show()
    {


    }
}