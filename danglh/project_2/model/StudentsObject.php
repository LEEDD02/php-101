<?php
class StudentsObject {
  private $id;
  private $name;
  public function __construct($each)
  {
    $this->id = $each['id'];
    $this->name = $each['name'];
  }
  public function GetName(){
    return $this->name;
  }
  public function SetName($var){
    $this->name = $var;
  }
  public function GetId(){
    return $this->id;
  }
  public function SetId($var){
    $this->id = $var;
  }
}
