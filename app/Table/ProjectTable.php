<?php


namespace SmoothDesign\Table;


use Core\Table\Table;

class ProjectTable extends Table {

    protected $table = 'project';

    /**
     * Récuprère les derniers projets
     * @return array
     */
    public function last(){

        return $this->query("
            SELECT project.id, project.title, project.content, category.title as category
            FROM project
            LEFT JOIN category on category_id = category.id
            WHERE project.id = ?"
        );

    }

    /**
     * @param $category_id
     * @return mixed
     */
    public function lastByCategory($category_id){

        return $this->query("
            SELECT project.id, project.title, project.content, category.title as category
            FROM project
            LEFT JOIN category on category_id = category.id
            WHERE project.id = ?",
            [$category_id]
        );

    }

    /**
     * Récuprère un projet en liant la categorie associé
     * @return \SmoothDesign\Entity\ProjectEntity
     */
    public function findWithCategory($id){

        return $this->query("
            SELECT project.id, project.title, project.content, category.title, category.id as category
            FROM project
            LEFT JOIN category on category_id = category.id
            WHERE project.id = ?",
            [$id],
            true
        );

    }


}