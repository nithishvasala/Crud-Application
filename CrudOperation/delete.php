<?php

   include 'connect.php';
    
   // if (isset($_GET['id']) && is_numeric($_GET['id']))
     //{
     $id = $_GET['id'];
     //$q = "DELETE FROM `users` WHERE id=$id";
       //mysqli_query($conn,$q);
       //or die(mysql_error());
       //header("location:retrive.php");
     //}
    //else
    //{
    //	header("Location:retrive.php");
    //}    

    $res =  mysqli_query( $conn,"DELETE FROM `users` WHERE id= '$id' ");
    header("location:retrive.php");

?>