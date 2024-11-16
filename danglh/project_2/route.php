<?php

require 'controller/StudentsController.php';
if (isset($_GET['action'])) {
  $action = $_GET['action'];
}
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
