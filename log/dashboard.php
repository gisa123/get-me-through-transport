<!Doctype HTML>
<html>
<head>
	<title>GetMeThrough</title>
	
</head>
<?php include 'header.php'; ?>
<section class="container grey-text">

	<h4 class="center">WELCOME!!<br>Book a Ticket</h4>
	<form class="white" action="booker1.php" method="POST">
		<label class="">Journey from:&nbsp</label>
		<input type="text" name="jrn1">
		<br>
    <label>Journey to:&nbsp</label>
    <input type="text" name="jrn2">
		<br>
    <label>Date</label>
    <input type="date" name="ita" ><br><br>
    <div class="center">
    	<input type="submit" name="submit" value="Search Bus" class="btn brand z-depth-0">
    </div>
	</form>
</section>
<?php include 'footer.php'; ?>	

</html>
