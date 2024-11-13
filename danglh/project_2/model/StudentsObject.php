<?php
class StudentsObject {
  public $id;
  public $name;
  
  public function SetId($var) {
    $this->id = $var;
  }
  public function GetId() {
    return $this->id;
  }
  
  public function SetName($var) {
    $this->name = $var;
  }
  public function GetName() {
    return $this->name;
  }
  

}
