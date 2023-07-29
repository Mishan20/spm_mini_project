<?php
$mysqli = new mysqli("localhost","root","","genaral_admin");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
  $name = $_POST['name'];
  $email = $_POST['email'];
  $division = $_POST['division'];
  $password = $_POST['password'];
$sql = "INSERT INTO user (name, email,division,password,role) VALUES('$name','$email','$division','$password','user');";
$result = $mysqli -> query($sql);

if($result){
   echo true;
}else{
   echo false;
}
}

$mysqli -> close();
?> 
