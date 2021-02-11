<?php

namespace SmoothDesign\Table;

use Core\Table\Table;

class UserTable extends Table {
    protected $table = "users";

    /**
     * Récuprère les derniers projets
     * @return array
     */
    public function last(){

        return $this->query("
            SELECT users.id, users.username, users.lastname, users.imageURL
            FROM users
            WHERE services.id = ?"
        );

    }

    /**
     * @param $category_id
     * @return mixed
     */
    public function lastByCategory($category_id){

        return $this->query("
            SELECT users.id, users.username, users.lastname, users.imageURL, category.title as category
            FROM users
            LEFT JOIN category on category_id = category.id
            WHERE users.id = ?",
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