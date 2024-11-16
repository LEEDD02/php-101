<?php
class StudentsController{
  public function index (){
    require 'model/students.php';
    $arr = (new students)->all();
    require 'view/students.php';
  }
  public function create (){
    require 'view/create.php';
  }
  public function store (){
    require 'model/students.php';
    (new students)->create($_POST);
    header('location: index.php');
  }
  public function edit (){
    $id = $_GET['id'];
    require 'model/students.php';
    $object = (new students)->find($id);
    require 'view/edit.php';
  }
  public function update (){
    require 'model/students.php';
    (new students)->update($_POST);
    header('location: index.php');
  }
  public function delete (){
    require 'model/students.php';
    (new students)->delete($_GET['id']);
    header('location: index.php');
  }
}
