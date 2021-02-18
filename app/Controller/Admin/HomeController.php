<?php


namespace SmoothDesign\Controller\Admin;

use Core\HTML\Form;

class HomeController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Page');
        $this->loadModel('Services');
        $this->loadModel('Project');
        $this->loadModel('Site');
        $this->loadModel('Home');
        $this->loadModel('Realisation');
    }

    public function index(){

        $pages = $this->Page->getPage('Home');
        $siteTable = $this->Page->getPage('Site');
        $form = new Form($pages);

        if (!empty($_POST)) {
            $result = $this->Home->update($_POST['id'], [
                    'titre' => $_POST['titre'],
                    'titre2' => $_POST['titre2']
                ]
            );

            $result = $this->Page->update(
                $_POST['id'],
                [
                    'desc_top' => $_POST['desc_top'],
                    'desc_bottom' => $_POST['desc_bottom'],
                ]
            );


            $result = $this->Site->update(
                $_POST['id'],
                [
                    'home_presentation' => $_POST['home_presentation'],
                    'home_presentation_2' => $_POST['home_presentation_2']
                ]
            );

            if ($result) {
                header('Location: /?page=admin.home.index');
            }
        }


        $this->render('admin.home.index', compact('form', 'pages', 'siteTable'));
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
                ?>
                <div class="alert alert-succes">Sauvegarde réussi !</div>
                <?php
            }
        }

        $this->render('admin.home.edit', compact( 'form'));
    }

    public function add(){
        $form = new Form($_POST);

        if(!empty($_POST)){
            $result = $this->Project->create(
                [
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id' => $_POST['category_id']
                ]
            );

            /**
             * Une fois que l'ajout a été fait, l'utilisateur est redirigé vers la page d'édition que tu peux changer si tu veux
             */
            if($result){
                header('Location: /?page=admin.home.edit&id='. \App::getInstance()->getDb()->lastInsertId());
            }
        }

        $this->render('admin.home.edit', compact('form'));
    }

    public function delete(){

        if(!empty($_POST)){
            $result = $this->Project->delete($_POST['id']);
            return $this->index();
        }
    }

}