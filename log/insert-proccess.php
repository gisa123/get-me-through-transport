<?php

if(count($_POST)>0)
{    
     include 'mydbCon.php';

     $f = $_POST['busno'];
     $l = $_POST['busmode'];
     $e = $_POST['nofseat'];
     $em = $_POST['dept'];
     $ema = $_POST['arrival'];
 
     $query = "INSERT INTO bus (bus_no,bus_model,number_of_seat,departure_time,arrival_time)
     VALUES ('$f','$l','$e','$em','$ema')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }

}
  header ("Location: customers.php?msg=".$msg."");
?>