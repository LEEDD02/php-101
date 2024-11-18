<?php
class ClassesObject {
  private $id;
  private $class_name;
  public function __construct($each)
  {
    $this->id = $each['id'];
    $this->class_name = $each['class_name'];
  }
  public function SetName($var){
    $this->class_name = $var;
  }
  public function GetId(){
    return $this->id;
  }
  public function SetId($var){
    $this->id = $var;
  }
  public function GetClassName(){
    return $this->class_name;
  }
}
