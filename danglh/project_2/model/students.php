<?php
require 'model/connect.php';
require 'model/StudentsObject.php';
class students {
  public function all(){
    $sql = "select * from students";
    $result = (new connect)->select($sql);
    foreach ($result as $each) {
      $object = new StudentsObject($each);
      $arr[]= $object;
    }
    return $arr;
  }
  public function create($params){
    $object = new StudentsObject($params);
    $sql = "insert into students (name) values ('{$object->GetName()}')";
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
    $sql = "update students set name='{$object->GetName()}' where id = '{$object->GetId()}'";
    (new connect)->execute($sql);
    
  }
  public function delete($id){
    $sql = "delete from students where id = '$id'";
    (new connect)->execute($sql);
    
  }
}
