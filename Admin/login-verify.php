<?php
//this file is included in login.php with ajax 
include '../config.php';
session_start();
        if(empty($SESSION['attempt']))
            {
                $SESSION['attempt']=1;
            }
            else if($SESSION['attempt']==3)
            {
                exit();
            }
          $username=$con->real_escape_string($_POST['username']);
          $password=$con->real_escape_string($_POST['password']);
        $sql = "SELECT * FROM login WHERE email='$username' OR phone='$username'";
         $result = $con->query($sql);
          if($result->num_rows > 0){
               while($row = $result->fetch_assoc())
                  {
                 $user_id=$row['id'];
                 $email=$row['email'];
                 $phone=$row['phone'];
                 $db_password=$row['password'];
             }
                if($username==$email||$username==$phone)
           { 
             if($password==$db_password)
             {   
                $_SESSION['id']=$user_id;   
                header('location:home.php');
             }
             else
             {
                echo "<script>alert('Wrong password!');</script>";
                $SESSION['attempt']=$SESSION['attempt']+1;
                header('location:login.php?login=loginerror');
           }
           
          }}
        else 
        {
            echo "<script>alert('Invalid username!');</script>";
            header('location:login.php?login=loginerror');
        }
