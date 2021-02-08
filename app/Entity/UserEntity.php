<?php


namespace SmoothDesign\Entity;


use Core\Entity\Entity;

class UserEntity extends Entity{
    public function getURL(){
        return 'index.php?p=user&id=' . $this->id ;
    }

    public function getExtrait(){
        return substr($this->content, 0,100) . '...';
    }
}