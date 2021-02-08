<?php


namespace SmoothDesign\Entity;


use Core\Entity\Entity;

class CategoryEntity extends Entity {
    public function getUrl(){
        return 'index.php?page=single&id=' . $this->id;
    }
}