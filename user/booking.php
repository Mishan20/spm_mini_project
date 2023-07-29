<?php
session_start();
$mysqli = new mysqli("localhost","root","","genaral_admin");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
$name = $_POST['name'];
$vehicleType = $_POST['vehicleType'];
$division = $_POST['division'];
$dateRequirement = $_POST['dateRequirement'];
$dateReturn = $_POST['dateReturn'];
$destination = $_POST['destination'];
$reason = $_POST['reason'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$id = $_SESSION['ID'];
$sql = "INSERT INTO vehicle_booking(user_id,name, vehicleType, division, dateRequirement,  dateReturn, destination, reason, email, mobile) VALUES 
($id, '$name',  '$vehicleType', '$division', '$dateRequirement', '$dateReturn', '$destination', '$reason', '$email', $mobile);";

$result = $mysqli -> query($sql);

if($result){
   echo true;
}else{
   echo false;
}
}

$mysqli -> close();
?> 
