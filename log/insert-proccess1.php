<?php

if(count($_POST)>0)
{    
     include 'mydbCon.php';

     $f = $_POST['jrny1'];
     $l = $_POST['jrny2'];
     $e = $_POST['dte'];
     $em = $_POST['bk1'];
 
     $query = "INSERT INTO journey (journey_from, journey_to, journey_date,book_id)
     VALUES ('$f','$l','$e','$em')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }

}
  header ("Location: journey.php?msg=".$msg."");
?>