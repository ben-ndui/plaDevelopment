<?php


namespace SmoothDesign\Controller\Admin;


class DashboardController extends AppController{
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
}