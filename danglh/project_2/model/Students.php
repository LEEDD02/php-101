<?php
require 'model/StudentsObject.php';
class Students
{
  public function GetAll()
  {
    require_once 'connect/connect.php';
    $sql = "select * from students ";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $each) {
      $object = new StudentsObject;
      $object->SetId($each['id']);
      $object->SetName($each['name']);
      $arr[] = $object;
    }
    mysqli_close($conn);
    return $arr;
  }

  public function Create($name)
  {
    require_once 'connect/connect.php';
    $object = new StudentsObject;
    $object->SetName($name);
    $sql = "insert into students (name)
    values ('{$object->name}')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
  }
  public function find($id)
  {
    require_once 'connect/connect.php';
    $sql = "select * from students where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    $object = new StudentsObject;
    $object->SetId($data['id']);
    $object->SetName($data['name']);
    mysqli_close($conn);
    return $object;
  }
  public function Update($id,$name)
  {
    require_once 'connect/connect.php';
    $object = new StudentsObject;
    $object->SetId($id);
    $object->SetName($name);
    $sql = "update students set 
    name = '{$object->name}'
    where id = '$object->id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
  }
  public function Destroy($id)
  {
    require_once 'connect/connect.php';
    $object = new StudentsObject;
    $object->SetId($id);
    $sql = "delete from students
    where id = '$object->id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
  }
}
