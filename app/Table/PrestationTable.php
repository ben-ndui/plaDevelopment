<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class PrestationTable extends Table {
    protected $table = "prestation";

    /**
     * Récupère tout les éléments qui constitut la HOMEPAGE
     * @param $name
     * @return mixed
     */
    public function findWithName($name){

        return $this->query("
            SELECT *
            FROM page INNER JOIN prestation
            WHERE page.name = ?",
            [$name],
            true
        );

    }
}