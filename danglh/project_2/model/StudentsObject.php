<?php
class StudentsObject {
  private $id;
  private $name;
  private $class_name;
  private $class_id;
  public function __construct($each)
  {
    $this->id = $each['id'];
    $this->name = $each['name'];
    $this->class_name = $each['class_name'];
    $this->class_id = $each['class_id'];
    
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
  public function GetClassId(){
    return $this->class_id;
  }
  public function GetClassName(){
    return $this->class_name;
  }
}
