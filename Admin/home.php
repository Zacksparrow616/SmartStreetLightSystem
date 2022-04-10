<?php
session_start();
if(!isset($_SESSION['id']))
{
    header('location:login.php');
}
include '../config.php';
$sql="SELECT * FROM streetlight WHERE area='CET'";
$result=$con->query($sql);
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
            <div class="col-sm-11">Electrical Department, Bhubaneswar, Odisha</div>
            <div class="col-sm-1 text-right"><a href="logout.php">Logout</a></div>
        </div>
    <div class="row">
        
        <div class="col-md-3">
            <div class="side-bar">
            <ul class="nav nav-pills nav-stacked">
                <li class=""><a href="#">Dashboard</a></li>
                <li class="home active"><a href="home.php">Home</a></li>
                <li class="compaint"><a href="adcomplaint.php">Complaint</a></li>
                <li class="contact"><a href="contact-us-req.php">Contact Us request</a></li>
            </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="monitering">
            
            <div class="monitering-area">
                <div class="form-group">
                    <form>
                        <select class="form-control">
                            <option>------Select Area--------</option>
                        </select>
                    </form>
                </div>
            </div>
                <div class="monitering-status">
                    <div class="col-md-7">
                        <ul class="light">
                            <?php while($row=$result->fetch_assoc()){ ?>
                            <li>Code:<?php echo $row['id'] ?> <br>Status:<?php echo $row['status'] ?><br>Intensity:<?php echo $row['brightness'] ?></li>
                            <?php } ?>
                            
                        </ul>
                </div>
                     <div class="col-xs-12 col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h2>Add Details of Street Light</h2> 
                </div>
                <div class="card-body">
                    <form  action="addlight.php" method="POST" id="form">
                        <div class="form-group">
                            <label for="name">Area:<span style="color:red">*</span></label>
                            <select name="area" class="form-control">
                                <option value="cet">Cet</option>
                <option value="nakagate">Naka gate</option>
                <option value="khandagiri">khandagiri</option>
            </select>
                        </div>
              
                        <div class="form-group">
                            <label for="name">Number of Light:<span style="color:red">*</span></label>
                            <input type="number" class="form-control" name="lightno" aria-describedby="emailHelp" placeholder="Enter light number" required>
                        </div>
                        
                        <div class="mx-auto">
                            <button type="submit" id="sub" name="addlight" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
        </div>
        </div> 
                    
            </div>
            
 </div>
        </div>
    </div>
</div>

</body>   
</html>

