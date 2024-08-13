<?php
function pdo_get_connection(){
  $servername = '127.0.0.1';
  $username = "danglh";
  $password = "password";

  $conn = new PDO("mysql:host=$servername;dbname=demo_db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}


// function pdo_execute($sql) { //function thuc thi
//   $sql_args = array_slice(func_get_arg(),1);
//   try {
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute($sql_args);
//   }
//   catch(PDOException $e){
//     throw $e;
//   }
//   finally{
//     unset($conn);
//   }
// };


// function pdo_query($sql){  // Lay tat ca
//   $sql_args = array_slice(func_get_arg(),1);
//   try {
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute($sql_args);
//     $rows = $stmt->fetchAll();
//     return $rows;
//   }
//   catch(PDOException $e){
//     throw $e;
//   }
//   finally{
//     unset($conn);
//   }
// }

// function pdo_query_one($sql){  //Lay mot
//   $sql_args = array_slice(func_get_arg(),1);
//   try {
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute($sql_args);
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $row;
//   }
//   catch(PDOException $e){
//     throw $e;
//   }
//   finally{
//     unset($conn);
//   }
// }
