<?php
$mysqli = new mysqli("localhost","root","","genaral_admin");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
   
  $id = $_POST['id'];
  
$sql = "UPDATE vehicle_booking set status = 'Approved' WHERE id = $id;";
$result = $mysqli -> query($sql);

if($result){
   echo true;
}else{
   echo false;
}
}

$mysqli -> close();
?> 
