<?php
include '../config.php';
if (isset($_POST['addlight'])){
    $lightno=$_POST['lightno'];
    $area=$_POST['area'];
    for($i=0; $i<$lightno;$i++){
    $sql="INSERT INTO `streetlight`(`id`, `area`, `status`, `brightness`) VALUES (NULL,'$area','OFF','LOW')";
    $result=$con->query($sql);
    }
    if($result)
    {
        header('location:home.php');
    }
 } 
 ?>
