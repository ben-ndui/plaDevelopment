<?php


namespace SmoothDesign\Entity;


use Core\Entity\Entity;

class SiteEntity extends Entity{

    public function getURL(){
        return 'index.php?p=site&id=' . $this->id ;
    }

}