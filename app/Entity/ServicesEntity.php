<?php

/**
 * UNE COLONE
 */
namespace SmoothDesign\Entity;

use Core\Entity\Entity;

class ServicesEntity extends Entity {

    protected $table = 'services';

    public function getUrl(){
        return 'index.php?page=services&id=' . $this->id;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contents, 0, 100) . '...</p>';
        $html = '<p><a href="'. $this->getUrl() .'">Voir la suite</a></p>';
        return $html;
    }
}