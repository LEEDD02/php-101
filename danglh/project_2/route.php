<?php

require 'controller/StudentsController.php';
require 'controller/ClassesController.php';
require 'controller/controller.php';
if (isset($_GET['action'])) {
  $action = $_GET['action'];
}
if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
}
switch ($controller) {
  case 'classes':
    switch ($action) {
      case 'create':
        (new ClassesController)->create();
        break;
      case 'store':
        (new ClassesController)->store();
        break;
      case 'edit':
        (new ClassesController)->edit();
        break;
      case 'update':
        (new ClassesController)->update();
        break;
      case 'delete':
        (new ClassesController)->delete();
        break;
      default:
        (new ClassesController)->index();
        break;
    }
    break;
  case 'students':
    switch ($action) {
      case 'create':
        (new StudentsController)->create();
        break;
      case 'store':
        (new StudentsController)->store();
        break;
      case 'edit':
        (new StudentsController)->edit();
        break;
      case 'update':
        (new StudentsController)->update();
        break;
      case 'delete':
        (new StudentsController)->delete();
        break;
      default:
        (new StudentsController)->index();
        break;
    }
      break;
  default:
    (new controller)->menu();
    break;
};
