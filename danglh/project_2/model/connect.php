<?php
class connect {
  private $hostname = "127.0.0.1";
  private $username = "danglh";
  private $password = "password";
  private $dbname = "project_2";
  private function conn(){
    $conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
    return $conn;
  }
  public function select($sql){
    $conn = $this->conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
  }
  public function execute($sql){
    $conn = $this->conn();
    mysqli_query($conn,$sql);
    mysqli_close($conn);
  }
}
