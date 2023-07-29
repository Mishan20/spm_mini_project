<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$division = $_POST['division'];
$password = $_POST['password'];

//Database Connection

$conn = new mysqli('localhost' , 'root','', 'Genaral_admin');
if($conn -> connect_errno){
    die('Connection Faild : ' .$conn -> connect_error);
    
}

    
    $sql = "INSERT INTO user_register(name, email, division, password) VALUES 
    ('$name',  '$email', '$division', '$password')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>