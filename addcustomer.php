<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("dbconnect.php");
$dbconnection=new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn'])== 'SUBMIT')
  {

    $dbconnection->addentry($_POST['u_name'],$_POST['name'],$_POST['mobile'],$_POST['dob'],$_POST['password'],$_POST['email']);

      sleep(1);
      echo '<p class="successmessage">Issue approved successfully.</p>';



     header("Location:login_customer.php");
  }
  else
  {
    echo "An error occured. Please try again";
  }
