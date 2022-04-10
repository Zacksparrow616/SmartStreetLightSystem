<?php 
session_start();
if(!isset($_SESSION['id']))
{
    header('location:login.php');
}
include '../config.php';
    $sql="SELECT * FROM `contactus` WHERE status='unread'";
    $results=$con->query($sql);
  
?>
<html>
    <head>
<!------ Include the above in your HEAD tag ---------->
<script src="../style/bootstrap/js/jquery.min.js" type="text/javascript"></script>
<link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../style/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="css/adstyle.css" rel="stylesheet" type="text/css"/>
    </head>
 <body>
    <div class="container-fluid">
        <div class="col-md-12 well">
            Electrical Department, Bhubaneswar, Odisha
        </div>
    <div class="row">
        
        <div class="col-md-3">
            <div class="side-bar">
            <ul class="nav nav-pills nav-stacked">
                <li class=""><a href="#">Dashboard</a></li>
                <li class="home"><a href="home.php">Home</a></li>
                <li class="compaint"><a href="adcomplaint.php">Complaint</a></li>
                <li class="contact active"><a href="contact-us-req.php">Contact Us request</a></li>
            </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="monitering">
          
<div class="complaint">
    <div class="row">
        
    </div>
    <div class="text-center"><h3>List Of Resquests</h3></div>
    <?php 
                while($row=$results->fetch_assoc())
                {
                ?>
    <div class="contactus-content col-sm-5">
        
        <div class="row">
            <div class="col-sm-12">
                
        <ul class="complaint-list">
            <li>Name:<?php echo $row['name']; ?></li>
            <li>Email:<?php echo $row['email']; ?></li>
            <li>Phone Number: <?php echo $row['phone']; ?></li>
            <li>Purpose: <?php echo $row['purpose']; ?></li>
            <li>Time: <?php echo $row['time']; ?></li>
        </ul>
                <div class="text-center"><button class="btn btn-block">Contact</button></div>
        </div>
        </div> 
        </div><?php } ?>
    </div>
</div>
</div>
        </div>
    </div>
</div>

</body>   
</html>
