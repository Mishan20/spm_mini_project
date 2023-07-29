<?php
session_start();
$mysqli = new mysqli("localhost","root","","genaral_admin");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE email = '$email' and password = '$password';";
$result = $mysqli -> query($sql);

if(mysqli_num_rows($result)){
   $x = $result->fetch_assoc();
   $_SESSION['ID'] = $x['id'];
   $_SESSION['EMAIL'] = $x['email'];
   
   if($x['role'] == "admin" |$x['role'] == "user" ){
      echo json_encode($x);
   }else{
      echo false;
   }
   
}else{
   echo "Invalid Username and Password";
}
}

$mysqli -> close();
?> 