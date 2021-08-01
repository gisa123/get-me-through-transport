<?php


include 'mydbCon.php';

$query = "DELETE FROM bus WHERE bus_no='" . $_GET["bus_no"] . "'"; // Delete data from the table bus using bus_no

 if (mysqli_query($dbCon, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
    mysqli_error($dbCon);
 }

header ("Location: customers.php?msg=".$msg."");
mysqli_close($dbCon);

?>