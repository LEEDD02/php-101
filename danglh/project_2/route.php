<?php

require 'controller/StudentsController.php';

if (isset($_GET['action'])) {
  $action = $_GET['action'];
}
switch ($action) {
  case 'create':
    (new StudentsController)->$action();
    break;

  case 'edit':
    (new StudentsController)->$action();
    break;

  case 'update':
    (new StudentsController)->$action();
    break;

  case 'delete':
    (new StudentsController)->$action();
    break;

  case 'store':
    (new StudentsController)->$action();
    break;

  default:
    (new StudentsController)->index();
    break;
}
