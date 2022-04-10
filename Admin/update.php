<?php
include '../config.php';
if(isset($_GET['pending'])){
    $up=$_GET['pending'];
    $sql="UPDATE `complaint` SET `progress`='working',`status`='read' WHERE id=$up";
    $results=$con->query($sql);
    if($results){
        header('location:adcomplaint.php');
    }
    }
if(isset($_GET['working'])){
    $up=$_GET['working'];
    $sql2="UPDATE `complaint` SET `progress`='resolved',`status`='read' WHERE id=$up";
    $results=$con->query($sql2);
    if($results){
        header('location:adcomplaint.php');
    }
    }
