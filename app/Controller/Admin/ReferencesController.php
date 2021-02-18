<?php


namespace SmoothDesign\Controller\Admin;

use Core\HTML\Form;

class ReferencesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Project');
        $this->loadModel('Realisation');
        $this->loadModel('Article_contact');
    }

    public function index(){

        $realisation = $this->Realisation->findWithName('Réalisation');

        $pages = $this->Page->getPage('realisation');

        $projects = $this->Project->getProjectIMG();

        $form = new Form($pages);

        if(!empty($_POST)){
            $res = $this->save($_POST['id'], "title", "content", '',$this->Project);
            $res = $this->save($_POST['id'], 'website_link','contact_by', '', $this->Article_contact, false, true);// IL TE RESTE CELUI LA A FAIRE
            $res = $this->save($_POST['realisation'], 'contenu','titre', 'titre2',$this->Realisation, true);

            if($res){
                header('Location: /?page=admin.references.index');
            }

        }

        $this->render('admin.references.index', compact('form', 'realisation', 'projects'));
    }

    public function delete(){

        if(!empty($_POST)){
            $result = $this->Page->delete($_POST['id']);
            return $this->index();
        }
    }

    function save($postTable, $field1, $field2, $field3, $uneTable, $real = false, $contact = false){
        $post = Array();
        foreach($postTable as $key=>$value) {
            $post[$key] = $value;
        }
        $tab[][] = Array();
        $i = 1;
        $j = 0;
        $l = 0;
        foreach($post as $p) {
            $tab[$i][$j] = $p;
            $j++;
            $l++;
            if ($l == 5) {
                $i++;
                $j = 0;
                $l = 0;
            }
        }
        for ($i = 1; $i < count($tab); $i++){
            switch ($real){
                case false:
                    if ($contact){
                        $uneTable->update(
                            $i,
                            [
                                $field1 => $tab[$i][1],
                                $field2 => $tab[$i][2],
                            ]
                        );
                    }else{
                        $uneTable->update(
                            $i,
                            [
                                $field1 => $tab[$i][3],
                                $field2 => $tab[$i][4],
                            ]
                        );
                    }
                    break;
                case true:
                    $uneTable->update(
                        $i,
                        [
                            $field1 => $tab[$i][0],
                            $field2 => $tab[$i][1],
                            $field3 => $tab[$i][2],
                        ]
                    );
                    break;
            }

        }
        return true;
    }

}