<?php
require 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome To Electrical Department, BHUBANESWAR</title>
        <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="style/bootstrap/js/jquery.min.js"></script>
        <script src="style/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style/css/style.css">
    </head>
    <body>
       <?php require 'header.php'; ?>
        <div class="intro" style="background-image: url(images/bg-street.jpg);">
            <div class="intro-content">
                <div class="intro-title mb-4 center">
                Smart Street light A initiative towards smart world.
                <p>Bhubaneswar</p>
            </div>
                
                <div class="container">
                    <div class="light-details">
                        <div class="light-details-content">
                            <p>Total Number of Light 23</p>
                            <p>Working Lights 19</p>
                            <p>Faulty Lights 4</p>
                        </div>
                    </div>
            </div>
            </div>
            
        </div>
        
<!-- Section 3 Complaint system starting-->
<div id="complaint">
    <div class="container">    
    <div class="row">
        <h2>Here We Are For You</h2>
        <div class="col-sm-7">
            <div class="complaint-content">
           <h3>Complaint</h3>
            <div class="card">
                <div class="card-body">
                    <form  action="complaint.php" method="POST" id="form">
                        <div class="form-group">
                            
                            
    <div class="row">
        <div class="form-group">
            <div class="items-collection">

                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="pole" autocomplete="off" value="Defect in pole">
                                    <span class="fa fa-car fa-2x"></span>
                                    <h5>Pole</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="cover" autocomplete="off" value="Light cover issue">
                                    <span class="fa fa-truck fa-2x"></span>
                                    <h5>Light cover</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="light" autocomplete="off" value="Light problem">
                                    <span class="fa fa-laptop fa-2x"></span>
                                    <h5>Light</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="others" autocomplete="off" value="Other problem">
                                    <span class="fa fa-cube fa-2x"></span>
                                    <h5>Others</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                            
                            </div>
                        <div class="form-group">
                            <label for="name">Street Light Code:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="lightcode" placeholder="Enter Street Light Code" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:<span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email"  placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone:</label>
                            <div class="row">
                                <div class="col-xs-12"><input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number" required>
                            </div>
                            </div>
                        </div>         
                        <div class="mx-auto">
                            <button type="submit" id="sub" name="complaint" class=" comp-check btn btn-primary text-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div> 
        <div class="col-xs-12 col-sm-5">
            <div class="comp-status">
                <div class="card">
                    <div class="card-body">
                        <div class="comp-status-content">
                            <div>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <div class="gly-slide">
        <span style="font-size: 100px;" class="glyphicon glyphicon-wrench"></span>
        </div>
      <p>Reliable Service</p>
    </div>

    <div class="item">
        <div class="gly-slide">
            <span style="font-size: 100px;" class="glyphicon glyphicon-user"></span>
        </div>
      <p>24X7 Hour Available</p>
    </div>

    <div class="item">
        <div class="gly-slide">
            <span style="font-size: 100px;" class="glyphicon glyphicon-repeat"></span>
        </div>
      <p>Instant Action</p>
    </div>
  </div>
</div>
                            </div>
                            
                    <form  action="" method="POST" id="form">
                <div class="form-group">
                    <h3>Know Your Complaint Status</h3>
                    <input type="text" class="form-control" name="email"  placeholder="Enter Complaint Number" required>
                </div>
                <div class="">
                    <button type="submit" id="sub" name="contact" class=" comp-check btn btn-primary text-right">Check</button>
                </div>
                    </form>
                </div>
                    </div>  
                </div>
                
            </div>
            
        </div>
    </div>
    </div>
</div>
<!-- Section 3 Complaint system ending -->

 <!-- Section 4 About Us ending -->
 <div id="contact-us" class="about-us" style="background-image: url(images/bg-about-us.jpg);">
     <div class="about-us-content">
         <div class="container">
    <div class="row">     
        <div class="col-sm-7">
            <h2>About</h2>    
        <p>
            The objective is to fully automate the Street lights (adding IOT technology to it)
            instead of controlling the Street lights manually.The Street light Automation system can
            reduce energy consumption(by using solar energy) and maintenance costs as well as it will notify the Municipal corporation
            whenever any problem arises in the Street lights so that they can take actions as soon as possible regarding the same.
        </p>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h2>Stay Connect With Us</h2> 
                </div>
                <div class="card-body">
                    <form  action="contact-us.php" method="POST" id="form">
                        <div class="form-group">
                            <label for="name">Name:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:<span style="color:red">*</span></label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="name">phone:<span style="color:red">*</span></label>
                            <div class="row">
                                
                                <div class="col-xs-12"><input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number" required>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Purpose:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="purpose" aria-describedby="emailHelp" placeholder="Enter Purpose" required>
                        </div>
                        
                        <div class="mx-auto">
                            <button type="submit" id="sub" name="contact" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
        </div>
        </div>
    </div>
         </div>
</div>
 </div>
 <!-- Section 4 About Us ending -->       
        
        <?php require 'footer.php'; ?>
    </body>
</html>
