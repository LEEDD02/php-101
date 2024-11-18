<?php
class ClassesController{
  public function index (){
    require 'model/classes.php';
    $arr = (new classes)->all();
    require 'view/classes.php';
  }
  public function create (){
    require 'view/class_create.php';
  }
  public function store (){
    require 'model/classes.php';
    (new classes)->create($_POST);
    header('location: index.php');
  }
  public function edit (){
    $id = $_GET['id'];
    require 'model/classes.php';
    $object = (new classes)->find($id);
    require 'view/class_edit.php';
  }
  public function update (){
    require 'model/classes.php';
    (new classes)->update($_POST);
    header('location: index.php');
  }
  public function delete (){
    require 'model/classes.php';
    (new classes)->delete($_GET['id']);
    header('location: index.php');
  }
}
