<?php

if(count($_POST)>0){

include 'database.php';
$name=$_POST['bus_no'];
$email=$_POST['busmode'];
$phone=$_POST['lname'];
$address=$_POST['dept'];
$city=$_POST['arrival'];

$sql = "UPDATE booking set bus_no='" . $_POST['bus_no'] . "', bus_model='" . $_POST['busmode'] . "', number_of_seat='" . $_POST['lname'] . "', departure_time='" . $_POST['dept'] . "', arrival_time='" . $_POST['arrival'] . "'"; 

if (mysqli_query($conn, $sql)){
    $msg = 2;
 } else {
    $msg = 4;
 }

}

header ("Location: customers.php?msg=".$msg."");

?>
