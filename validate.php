<?php
require_once("dbconnect.php");
session_start();
$dbconnection = new dbconnector;
$dbconnection->connect();
  $result = $dbconnection->verifyentry($_POST['u_name'], $_POST['password']);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  if($result->num_rows > 0)
  {
    $_SESSION['u_name'] = $_POST['u_name'];
    $_SESSION['password'] = $row['password'];
    header("Location:dashboard.php");
  }
  else
  {
    $_SESSION['error']='login';
    echo "Bad Credentials";


  }

 ?>
