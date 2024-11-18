<?php
require_once 'model/connect.php';
require 'model/ClassesObject.php';
class classes {
  public function all(){
    $sql = "select * from classes";
    $result = (new connect)->select($sql);
    foreach ($result as $each) {
      $object = new ClassesObject($each);
      $arr[]= $object;
    }
    return $arr;
  }
  public function create($params){
    $object = new ClassesObject($params);
    $sql = "insert into classes (class_name) values ('{$object->GetClassName()}')";
    (new connect)->execute($sql);
    
  }
  public function find($id){
    $sql = "select * from classes where id = '$id'";
    $result = (new connect)->select($sql);
    $data = mysqli_fetch_array($result);
    return new ClassesObject($data);
  }
  public function update($params){
    $object = new ClassesObject($params);
    $sql = "update classes set class_name='{$object->GetClassName()}' where id = '{$object->GetId()}'";
    (new connect)->execute($sql);
    
  }
  public function delete($id){
    $sql = "delete from classes where id = '$id'";
    (new connect)->execute($sql);
    
  }
}
