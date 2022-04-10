<?php
$feedback="active";
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
        <div>
           <?php require 'header.php'; ?>
        </div>
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <form action="feedback.php" method="POST">
                        <div class="form-group">
                            <label for="purpose">Heading</label>
                            <input type="text" class="form-control" name="purpose" placeholder="Headline of feedback" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" name="feedback" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white" style="padding: 1px 10px;"><h4><i class="glyphicon glyphicon-home"></i> Address</h4></div>
                <div class="card-body">
                    <p>Kalinga Nagar</p>
                    <p>753002 Bhubaneswar</p>
                    <p>Odisha, India</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. 7873033317</p>
                    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3742.6038715932955!2d85.79154!3d20.275257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23fdc1a764057038!2sNaxatra+News!5e0!3m2!1sen!2sus!4v1561096584597!5m2!1sen!2sus" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>      </div>
                </div>

            </div>
        </div>
    </div>
</div>
 <?php require 'footer.php'; ?>
        <?php
          
               if (isset($_POST['feedback']))
               {
                   
                   $purpose=$con->real_escape_string($_POST['purpose']);
                   $msg=$con->real_escape_string($_POST['message']);
                   $user_id=$_SESSION['user_id'];
                   $sqlf = "INSERT INTO `feedback`(`sl_no`, `user_id`, `purpose`, `message`, `post_time`, `can_public`) VALUES (NULL ,'$user_id','$purpose', '$msg', NOW(),'1')";
                   $resultf = $con->query($sqlf);
                   if($resultf)
                   {
                       echo '<script>alert("send successfully !");</script>';
                   }
                   else
                   {
                       echo '<script>alert("error occurs try agian after sometimes!");</script>';
                   }
                 }
         ?>
    </body>
</html>

