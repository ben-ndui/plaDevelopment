<?php


namespace SmoothDesign\Controller\Admin;


use Core\HTML\Form;

class ServicesController extends AppController{

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
        $services = $this->Services->all();

        $this->render('admin.services.index', compact( 'services'));
    }

    public function edit(){

        $service = $this->Services->find($_GET['id']);

        $form = new Form($service);

        if(!empty($_POST)){
            $result = $this->Services->update($_GET['id'], [
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id' => $_POST['category_id']
                ]
            );

            if($result){
                return $this->index();
            }
        }

        $this->render('admin.services.edit', compact( 'form'));
    }

    public function add(){

        $form = new Form($_POST);

        if(!empty($_POST)){
            $result = $this->Services->create(
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

        $this->render('admin.services.edit', compact('form'));
    }

    public function delete(){

        if(!empty($_POST)){
            $result = $this->Services->delete($_POST['id']);
            return $this->index();
        }
    }

}