<?php


namespace SmoothDesign\Controller;

class HomeController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Services');
        $this->loadModel('Project');
        $this->loadModel('Site');
        $this->loadModel('Realisation');
    }

    public function index()
    {

        $home = $this->Page->getPage('home');
        $services = $this->Services->all();
        $project = $this->Project->all();
        $apparence = $this->Site->find(1);


        $this->render('home.index', compact('home', 'services', 'project', 'apparence'));

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