<?php
include 'mydbCon.php';
$a = $_POST["pass1"];
$b = $_POST['newpa'];

$check=0;
$test=0;
$sql = "SELECT user_pass,user_id FROM user_tbl WHERE user_pass = '$a'";
// $sql1 = "UPDATE  user_tbl SET user_pass = '$b'";
$result = mysqli_query($dbCon, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
$pwd=$row["user_pass"];
$id=$row["user_id"];
if($a===$pwd){
$check=1;
}
}}
if ($check===1) {
	$sql1 = "UPDATE  user_tbl SET user_pass = '$b' WHERE user_id = '$id'";
$result1 = mysqli_query($dbCon, $sql1);
echo "<script>alert ('password changed successfully')</script>";
        echo "<script>location.href='pass1.php'</script>";
	}
	else{
echo "<script>alert ('you have put wrong current password please change')</script>";
        echo "<script>location.href='pass1.php'</script>";
	}
	
?>
