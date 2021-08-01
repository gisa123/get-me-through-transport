<?php 
include 'mydbCon.php';
$a = $_GET["book_id"];
$check=0;
$test=0;
$sql = "SELECT * FROM booking WHERE book_id = '$a'";
// $sql1 = "UPDATE  user_tbl SET user_pass = '$b'";
$result = mysqli_query($dbCon, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
$var1=$row["journey_from"];
$var2=$row["journey_to"];
$var3=$row["book_date"];
$var4=$row["price"];
}
}
 ?>