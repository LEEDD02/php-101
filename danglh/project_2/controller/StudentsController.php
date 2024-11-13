<?php
class StudentsController
{
  public function index()
  {
    require 'model/Students.php';
    $arr = (new Students())->GetAll();
    require 'view/index.php';
  }
  public function create() {
    require 'view/create.php';
  }
  public function store()
  {
    $name = $_POST['name'];
    require 'model/Students.php';
    (new Students())->Create($name);
    header('location: index.php');
  }
  public function edit()
  {
    $id = $_GET['id'];
    require 'model/Students.php';
    $arr = (new Students())->find($id);
    require 'view/edit.php';
  }
  public function update()
  {
    $id = $_POST['id'];
    $name = $_POST['name'];
    require 'model/Students.php';
    (new Students())->Update($id,$name);
    header('location: index.php');
  }
  public function delete()
  {
    $id = $_GET['id'];
    require 'model/Students.php';
    (new Students())->Destroy($id);
    header('location: index.php');
  }
}
