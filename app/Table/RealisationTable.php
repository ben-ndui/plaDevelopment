<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class RealisationTable extends Table {
    protected $table = "realisation";

    /**
     * Récupère tout les éléments qui constitut la HOMEPAGE
     * @param $name
     * @return mixed
     */
    public function findWithName($name){

        return $this->query("
            SELECT *
            FROM page INNER JOIN realisation
            WHERE page.name = ?",
            [$name],
            true
        );

    }
}