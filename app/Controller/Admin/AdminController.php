<?php


namespace SmoothDesign\Controller\Admin;

use Core\HTML\Form;

class AdminController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Page');
        $this->loadModel('Services');
        $this->loadModel('Project');
        $this->loadModel('Site');
        $this->loadModel('Realisation');
    }

    public function index(){

        $usersTable = $this->User;
        $projectsTable = $this->Project->all();
        $servicesTable = $this->Services->all();


        $this->render('admin.dashboard.index', compact( 'usersTable', 'projectsTable', 'servicesTable'));

    }

    public function editHome(){
        $home = $this->Page->getPage('home');
        $services = $this->Services->all();
        $project = $this->Project->all();
        $apparence = $this->Site->find(1);


        $this->render('admin.home.index', compact('home', 'services', 'project', 'apparence'));
    }

}