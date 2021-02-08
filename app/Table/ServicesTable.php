<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class ServicesTable extends Table {

    protected $table = 'services';

    /**
     * Récuprère les derniers projets
     * @return array
     */
    public function last(){

        return $this->query("
            SELECT services.id, services.title, services.content, services.imageURL, category.title as category
            FROM services
            LEFT JOIN category on category_id = category.id
            WHERE services.id = ?"
        );

    }

    /**
     * @param $category_id
     * @return mixed
     */
    public function lastByCategory($category_id){

        return $this->query("
            SELECT services.id, services.title, services.content, services.imageURL, category.title as category
            FROM services
            LEFT JOIN category on category_id = category.id
            WHERE services.id = ?",
            [$category_id]
        );

    }

    /**
     * Récuprère un projet en liant la categorie associé
     * @return \SmoothDesign\Entity\ProjectEntity
     */
    public function findWithCategory($id){

        return $this->query("
            SELECT services.id, services.title, services.content, category.title, category.id as category
            FROM services
            LEFT JOIN category on category_id = category.id
            WHERE services.id = ?",
            [$id],
            true
        );

    }


}