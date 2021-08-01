<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gmmt_project";


// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$a = $_POST["ema"];
$client = "client";
$admin ="admin";
$check=0;
$test=0;
$sql = "SELECT * FROM user_tbl WHERE user_email = '$a'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $uname=$row["user_email"];
$pwd=$row["user_pass"];
$nm=$row['user_name'];
$type=$row['user_type'];
   if($_POST['ema']===$uname && $_POST['password']===$pwd && $type=='client'){
        $check=1;
    }
elseif($_POST['ema']===$uname && $_POST['password']===$pwd && $type=='admin'){
$test=1;
}
    }}

    session_start();
    if($check==1){
        $_SESSION['ema'] = $uname;
        echo "<script>location.href='dashboard.php'</script>";
    }
elseif($test==1){
echo "<script>alert ('welcome Admin!')</script>";
        echo "<script>location.href='customers.php'</script>";
}
    else{
        echo "<script>alert ('username or password incorrect!')</script>";
        echo "<script>location.href='login.php'</script>";
    }


mysqli_close($conn);
?>
