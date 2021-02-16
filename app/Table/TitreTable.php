<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class TitreTable extends Table{

    protected $table = 'titre';

    public function getLesTitres($pageID){

        return $this->query("
            SELECT libelle, titre.name
            FROM titre JOIN page on titre.page_id = page.id 
            WHERE page.name = 'home'"
        );
    }

}