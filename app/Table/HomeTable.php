<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class HomeTable extends Table {
    protected $table = "home";

    /**
     * Récupère tout les éléments qui constitut la HOMEPAGE
     * @param $name
     * @return mixed
     */
    public function findWithName($name){

        return $this->query("
            SELECT *
            FROM page INNER JOIN home ON page.id = home.id
            WHERE page.name = ?",
            [$name],
            true
        );

    }
}