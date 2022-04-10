<?php
require 'config.php';
if (isset($_POST['contact'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $purpose=$_POST['purpose'];
    $sql="INSERT INTO `contactus`(`id`, `name`, `email`, `phone`, `purpose`, `time`,`status`) VALUES (NULL,'$name','$email','$phone','$purpose',NOW(),'unread')";
    $result=$con->query($sql);
    if($result)
    {
        header('location:index.php');
    }
 } ?>
