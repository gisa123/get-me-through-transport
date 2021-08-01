<?php
include 'database.php';
$name =$_POST['name'];
$email =$_POST['email'];
$pass =($_POST['pass']);
$client = "client";
// sha1()used to secure pasword
$sql = "INSERT INTO user_tbl(user_name, user_email, user_pass, user_type) values('$name', '$email', '$pass', '$client')";
if ($conn->query($sql) === TRUE){
	echo "new record created successfully";
}
else{
	echo "error: " .$sql ."<br>" .$conn->error."<br>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(function()
{
				swal.fire({
                      'title': 'successfully',
                      'text':'successfully registered',
                      'type':'success'
  })
			});
</script>