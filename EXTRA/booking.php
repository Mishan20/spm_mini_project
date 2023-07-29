<?php 

$name = $_POST['name'];
$vehicleType = $_POST['vehicleType'];
$division = $_POST['division'];
$dateRequirement = $_POST['dateRequirement'];
$dateReturn = $_POST['dateReturn'];
$destination = $_POST['destination'];
$reason = $_POST['reason'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

//Database Connection

$conn = new mysqli('localhost' , 'root','', 'Genaral_admin');
if($conn -> connect_errno){
    die('Connection Faild : ' .$conn -> connect_error);
    
}

    
    $sql = "INSERT INTO vehicle_booking(name, vehicleType, division, dateRequirement,  dateReturn, destination, reason, email, mobile) VALUES 
    ('$name',  '$vehicleType', '$division', '$dateRequirement', '$dateReturn', '$destination', '$reason', '$email', $mobile)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>