<?php

namespace Services;

class Form {
    
    private $formCode = "";
    
    public function render(){
        return $this->formCode;
    }
    
    public function clear(){
        $this->formCode = "";
    }
    
    public function addLabelFor(string $for, string $texte) : self
    {
        $this->formCode .= "<label for='$for'";
        $this->formCode .= ">$texte</label>";
        return $this;
    }
    
    public function startForm(string $methode = 'post', string $action = '') : self
    {
        $this->formCode .= "<form action='$action' method='$methode'>";
        return $this;
    }
    
    public function endForm() : self
    {
        $this->formCode .= '</form>';
        return $this;
    }
    
    public function addInput(string $type, string $nom) : self
    {
        $this->formCode .= "<input type='$type' name='$nom'>";
        return $this;
    }
    
    public function addTextarea(string $nom, string $valeur = '') : self
    {
        $this->formCode .= "<textarea name='$nom'";
        $this->formCode .= ">$valeur</textarea>";
        return $this;
    }
    
    public function addButton(string $texte):self
    {
        $this->formCode .= '<button type="submit"';
        $this->formCode .= ">$texte</button>";
        return $this;
    }
}