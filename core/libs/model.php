<?php

class Model {

  protected $db; 

  public function __construct(){
    $dbClass = new Database(); 
    $this->db = $dbClass->conn();
  }
  
  public function getDb(){ 
    return $this->db;
  }
}

?>
