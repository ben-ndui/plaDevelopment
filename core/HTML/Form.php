<?php


namespace Core\HTML;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{
    /**
     * @var array Donnée utilisées par le formulaire
     * @var string Tag utilisé pour entourer les champs
     */
    private $data;
    private $action;
    public $surround = 'p';

    /**
     * @param string $action URL du fichier qui traitera le formulaire en $_POST
     * @param array $data Donnée utilisées par le formulaire
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param $html Code HTML à entourer
     */
    private function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param $index string Permet de retourner la donnée situé a cet index precis
     */
    protected function getValue($index){
        if (is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string Nom que portera notre champs
     * @param $type string Type de champs que l'on veut créer
     * @param $cssClass string Class CSS qui lui est associées
     * @param $placeholder string Message d'exemple de notre champs
     */
    public function input($name, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $cssClass = isset($options['classname']) ? $options['classname'] : 'text';
        $placeholder = isset($options['plholder']) ? $options['plholder'] : 'text';

        if ($type === 'textarea'){
            $input = '<textarea class="'. $cssClass .'" placeholder="'. $placeholder .'" name="'. $name .'">"'.$this->getValue($name).'"</textarea>';
        }else{
            $input = '<input type="'. $type .'" name="'. $name .'" class="'. $cssClass .'" placeholder="'. $placeholder .'" value="'. $this->getValue($name) .'">';
        }
        return $this->surround($input);
    }

    public function select($name, $options){
        $cssClass = isset($options['classname']) ? $options['classname'] : 'text';
        $input = '<select class="'. $cssClass .'" name="'. $name .'">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k' . $attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($input);
    }

    /**
     * @param $value string valeur qu'affichera notre button
     * @param $cssClass string Class CSS qui lui est associées
     */
    public function submit($value, $cssClass){
        return $this->surround('<button type="submit" class="'. $cssClass .'">'.$value.'</button>');
    }

    public function getAction(){
        return $this->action;
    }
}