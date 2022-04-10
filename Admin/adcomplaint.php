<?php 
session_start();
if(!isset($_SESSION['id']))
{
    header('location:login.php');
}
include '../config.php';
    $sql="SELECT * FROM `complaint` WHERE progress='pending'";
    $result=$con->query($sql);
    $sql2="SELECT * FROM `complaint` WHERE progress='resolved'";
    $result2=$con->query($sql2);
    $sql1="SELECT * FROM `complaint` WHERE progress='working'";
    $result1=$con->query($sql1);
    if(isset($_GET['progress'])){
if($_GET['progress']=='pending'){
    $sql="SELECT * FROM `complaint` WHERE progress='pending'";
    $results=$con->query($sql);
    
    }
else if($_GET['progress']=='resolved'){
    $sql2="SELECT * FROM `complaint` WHERE progress='resolved'";
    $results=$con->query($sql2);
    }}
else {
    $sql4="SELECT * FROM `complaint` WHERE progress='working'";
    $results=$con->query($sql4);
    if($results){
    }
    }
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
                <li class="compaint active"><a href="adcomplaint.php">Complaint</a></li>
                <li class="contact"><a href="contact-us-req.php">Contact Us request</a></li>
            </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="monitering">
          
<div class="complaint">
    <div class="row">
        <form action="" method="">
            <div class="col-sm-6">
                <select class="form-control">
                <option value="working">Working</option>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
            </div>
            <div class="col-sm-6">
                <a href="adcomplaint.php?progress=pending"><input type="button" class="btn btn-danger" value="Pending <?php echo "$result->num_rows"; ?>"></a>
            <a href="adcomplaint.php"><input type="button" class="btn btn-default" value="Working <?php echo "$result1->num_rows"; ?>"></a>
            <a href="adcomplaint.php?progress=resolved"><input type="button" class="btn btn-success" value="Completed <?php echo "$result2->num_rows"; ?>"></a>
            </div>
        </form>
    </div>
    <div class="text-center"><h3>LIST OF COMPLAINTS</h3></div>
    <div class="col-sm-12">
        <div class=" col-sm-6">
            <div class="text-center"><h4>Pending</h4></div>
        <?php 
                while($row=$result->fetch_assoc())
                {
                ?>
    
        
        <div class="complaint-content-pending">
            <div class="">
               
        <ul class="complaint-list">
            <li>Area:<?php echo $row['id']; ?></li>
            <li>Light Code:<?php echo $row['lightcode']; ?></li>
            <li>Problem: <?php echo $row['purpose']; ?></li>
            <li>Current Status: <?php echo $row['progress']; ?></li>
        </ul>
                
        </div>
            <div class="text-center">
                <a href="update.php?pending=<?php echo $row['id']; ?>"><input type="button" class="btn btn-primary" value="Working started"></a>
            
        </div> 
        </div>
    <?php } ?></div>
        <div class=" col-sm-6">
            <div class="text-center"><h4>
                    <?php 
                    if(isset($_GET['progress'])){
                        if($_GET['progress']=='resolved')
                        echo 'Completed';
                    }else
                    echo "Working";
                    ?>
                </h4></div>
        <?php 
                while($row=$results->fetch_assoc())
                {
                ?>
    
        
        <div class="complaint-content-working" style="<?php 
                    if(isset($_GET['progress'])){
                        if($_GET['progress']=='resolved')
                        echo 'background-color:#77d984';
                    }
                    ?>">
            <div class="">
               
        <ul class="complaint-list">
            <li>Area:<?php echo $row['id']; ?></li>
            <li>Light Code:<?php echo $row['lightcode']; ?></li>
            <li>Problem: <?php echo $row['purpose']; ?></li>
            <li>Current Status: <?php echo $row['progress']; ?></li>
        </ul>
                
        </div>
            <div class="text-center">
            <?php 
                    if(isset($_GET['progress'])){
                        if($_GET['progress']=='resolved')
                        echo 'Closed';
                    }else{
                    ?>
                <a href="update.php?working=<?php echo $row['id']; ?>"><input type="button" class="btn btn-primary" value="Completed"></a>
            <?php } ?>
            </div> 
        </div>
    <?php } ?></div>
    </div>
     
</div>
</div>
        </div>
    </div>
</div>

</body>   
</html>
