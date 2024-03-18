<?php

class Restaurante{
    private $id;
    private $name;
    private $descricao;
    private $categoria;
    private $url;

public function getId(){
    return $this->id;
}
public function getName(){
    return $this->name;
}
public function getDescricao(){
    return $this->descricao;
}

public function getCategoria(){
    return $this->categoria;        
}

public function getUrl(){
    return $this->url;
}

public function setId ($id){
    $this->id = $id;
}
public function setName ($name){
    $this->name = $name;
}
public function setDescricao ($descricao){
    $this->descricao = $descricao;
}
public function setCategoria ($categoria){
    $this->categoria = $categoria;
}
public function setUrl ($url){
    $this->url = $url;
}
}
?>