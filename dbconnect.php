<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class dbconnector
{
  var $dblink;
  function connect()
  {
    global $dblink;
    $dblink = new mysqli("localhost","root","","internshala_storage");//DATABASE CONNECTION
    if($dblink == false)
    {
      die("ERROR: Could not connect. " . mysqli_connect_error());//shows error on erroneous connection
    }
  }

  public function addentry($u_name,$name,$mobile,$dob,$password,$email)
  {
    global $dblink;
    $query = $dblink->prepare("INSERT INTO credentials (u_name, name, mobile, dob, password, email) values(?,?,?,?,?,?)");
    $query->bind_param("ssisss",$u_name,$name,$mobile,$dob,$password,$email);
    if($query->execute())
{
 return 1;
}
 else
{
return 0;
}
  }

  public function verifyentry($u_name,$password)
  {
    global $dblink;
    $query = $dblink->prepare("SELECT u_name, password FROM credentials WHERE u_name = ? AND password = ?");
    $query->bind_param("ss", $u_name, $password);
    $query->execute();
    return $query->get_result();
  }
}
?>
