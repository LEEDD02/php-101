<?php
require_once 'model/connect.php';
require 'model/StudentsObject.php';
class students {
  public function all(){
    $sql = "SELECT students.*, classes.class_name from students LEFT JOIN classes on students.class_id = classes.id";
    $result = (new connect)->select($sql);
    foreach ($result as $each) {
      $object = new StudentsObject($each);
      $arr[]= $object;
    }
    return $arr;
  }
  public function create($params){
    $object = new StudentsObject($params);
    $sql = "insert into students (name,class_id) values ('{$object->GetName()}','{$object->GetClassId()}')";
    (new connect)->execute($sql);
    
  }
  public function find($id){
    $sql = "select * from students where id = '$id'";
    $result = (new connect)->select($sql);
    $data = mysqli_fetch_array($result);
    return new StudentsObject($data);
  }
  public function update($params){
    $object = new StudentsObject($params);
    $sql = "update students set name='{$object->GetName()}', class_id='{$object->GetClassId()}' where id = '{$object->GetId()}'";
    (new connect)->execute($sql);
    
  }
  public function delete($id){
    $sql = "delete from students where id = '$id'";
    (new connect)->execute($sql);
    
  }
}
