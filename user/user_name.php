<?php
session_start();


$conn = new mysqli('localhost' , 'root','', 'Genaral_admin');
if($conn -> connect_errno){
    die('Connection Faild : ' .$conn -> connect_error);
    
}

$id=$_SESSION['user_name'];
//require_once('db.php');
$query = "select * from user WHERE name = $id;";
$result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome </h1>
      <span>  <?php
                             while($row = mysqli_fetch_assoc($result))
                             {
                            ?>
                                
                                <p><?php echo $row['name'];?> </p>
                                

                            </tr>

                            <?php

                            }

                            ?></span>
   </div>

</div>

</body>
</html>