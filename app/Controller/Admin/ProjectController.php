<?php


namespace SmoothDesign\Controller\Admin;


use App;
use Core\HTML\Form;

class ProjectController extends AppController{
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
        $projectTable = $this->Project;
        $projects = $projectTable->all();

        $this->render('admin.project.index', compact( 'projectTable', 'projects'));
    }

    public function edit(){
        $project = $this->Project->find($_GET['id']);

        $form = new Form($project);

        if(!empty($_POST)){
            $result = $this->Project->update($_GET['id'], [
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id' => $_POST['category_id']
                ]
            );

            if($result){
                return $this->index();
            }
        }

        $this->render('admin.project.edit', compact( 'form'));
    }

    public function add(){

        $form = new Form($_POST);

        if(!empty($_POST)){
            $result = $this->Project->create(
                [
                    'title' => $_POST['title'],
                    'content' => $_POST['content']
                ]
            );

            /**
             * Une fois que l'ajout a été fait, l'utilisateur est redirigé vers la page d'édition que tu peux changer si tu veux
             */
            if($result){
                $this->index();
            }
        }

        $this->render('admin.project.edit', compact('form'));
    }

    public function delete(){

        if(!empty($_POST)){
            $result = $this->Project->delete($_POST['id']);
            return $this->index();
        }
    }

}