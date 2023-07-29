<?php
session_start();
$conn = new mysqli('localhost' , 'root','', 'Genaral_admin');
check_login()
$aid=$_SESSION['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ITUM VIS</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" type="image/x-icon" href="Homelogo.png" >

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
        <style>
            .lg {
                max-height: 100px;
                
            }
    
            .lr {
                align-items: center;
                max-height: 600px;
    
            }
    
            a {
                text-decoration: none;
                color: black;
                font-weight: 600;
            }
    
            .x {
                background-color: #EC6548;
                color: white;
            }
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                margin-left: auto;
                margin-right: auto;
                       
            }
        </style>
        </head>

<body >
    <div class="m-1 row">
        <div class="col-md-3 " style="margin-top: 20px;">
            <div class="logo m-3">
                <img class="lg" src="site-logo.png" alt="Logo" >
            </div>       
            
            
          
            <nav class="navigation">
                

                <div style="margin-top: 50px;">
                    <button class="btn btn-lg btn-light x" style="width: 200px;text-align: left;"><i
                        class="bi bi-house-door-fill p-1"></i></i><a href="Home.html" class="text-light">HOME</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                            class="bi bi-speedometer p-1"></i><a href="Dashboard.html"
                            >DASHBOARD</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                            class="bi bi-truck-front-fill p-1"></i><a href="Vehicle.html">VEHICLES</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-vinyl-fill p-1"></i><a href="Record.html">RECORDS</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-pencil-square p-1"></i><a href="Booking.html">BOOKING</a></button>
                </div>

                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-pencil-square p-1"></i><a href="MyBooking.html">MY BOOKING</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-gear-fill p-1"></i><a href="Setting.html">SETTINGS</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-headset p-1"></i><a href="Support.html">SUPPORT</a></button>
                </div>
                <div style="margin-top: 60px;">
                    <button class="btn btn-lg btn-danger " style="width: 150px;text-align: left;"><i
                        class="bi bi-box-arrow-left p-2"></i><a href="logout.php"class="text-light">LOGOUT</a></button>
                </div>
      
    
            </nav>
        </div>

<div class="form-horizontal animated bounce  col-md-9" >       
    <table class="table table-bordered table-striped table-hover table-condensed" width="100%" height="5px" cellspacing="0"  style="margin-top: 190px; margin-left: -90px;" >

      <thead class="table-danger" >
        <tr>
            <th style="width:12.5%">Name</th>
           
            <th style="width:15%" >Email</th>
            <th style="width:12.5%">Mobile Number</th>
            <th style="width:12.5%">Vehicle Type</th>
            <th style="width:12.5%">Division</th>
            <th style="width:12.5%">Booking Date</th>
            <th style="width:12.5%">Return Date</th>     
            <th>Status</th>
          </tr>
          
      </thead>
      <tbody>
                <?php
                    $aid=$_SESSION['id'];
                    $ret="SELECT * from vehicle_booking where id=? ";
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    //$cnt=1;
                        while($row=$res->fetch_object())
                        {
                ?>
                  <tr>
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->mobile;?></td>
                    <td><?php echo $row->vehicleType;?></td>
                    <td><?php echo $row->division;?></td>
                    <td><?php echo $row->dateRequirement;?></td>
                    <td><?php if($row->status == "Pending"){ echo '<span class = "badge badge-warning">'.$row->status.'</span>'; } else { echo '<span class = "badge badge-success">'.$row->status.'</span>';}?></td>
                  </tr>

                <?php  }?>
                </tbody>
    </table>

  </div>

       
          

</body>

</html>
