<?php
require 'config.php';
if (isset($_POST['complaint'])){
    $lightcode=$_POST['lightcode'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    if(isset($_POST['pole'])){
       $purpose=$_POST['pole']; 
    }
    if(isset($_POST['light'])){
       $purpose=$_POST['light']; 
    }
    if(isset($_POST['cover'])){
       $purpose=$_POST['cover']; 
    }
    if(isset($_POST['others'])){
       $purpose=$_POST['others']; 
    }
    $sql="INSERT INTO `complaint`(`id`, `lightcode`, `email`, `phone`, `purpose`, `progress`, `status`, `time`) VALUES (NULL,'$lightcode','$email','$phone','$purpose','pending','unread',NOW())";
    $result=$con->query($sql);
    if($result)
    {
        header('location:index.php');
    }
 } ?>
