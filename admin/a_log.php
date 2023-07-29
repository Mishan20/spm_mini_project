<?php 

$a_email = $_POST['a_email'];

$a_password = $_POST['a_password'];

//Database Connection

$conn = mysqli_connect('localhost' , 'root','', 'Genaral_admin');
session_start();

if(isset($_POST['a_submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['a_email']);
   $password = mysqli_real_escape_string($conn, $_POST['a_password']);

   $select = " SELECT * FROM admin_login WHERE a_email = '$a_email' && a_password = '$a_password' ";

   $result = mysqli_query($conn, $select);
}



?>