<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class PageTable extends Table{
    protected $table = 'page';

    /**
     * Récuprère les derniers projets
     * @return array
     */
    public function getPage($pageVoulue){

        return $this->query("
            SELECT *
            FROM page
            INNER JOIN {$pageVoulue} on page.name = {$pageVoulue}.name
            WHERE page.name = ?", [$pageVoulue], true
        );
    }

}