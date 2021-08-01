<!DOCTYPE html>
<html img="en"  dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0">
	<title>Responsive Contact Form</title>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
	<!--div class="alert-success">
		<span>Message Sent! Thank you for contacting us.</span>
	</div>
	<div class="alert-error">
		<span>something wan! Please try again.</span>
	</div-->
<div class="Contact-section">
	<div class="Contact-info">
		<div> <i class="fas fa-map-marker-alt"></i>Address,City,Country</div>
		<div> <i class="fas fa-envelope"></i>npcictlevel12018@gmail.com</div>
		<div> <i class="fas fa-phone"></i>250786520271</div>
		
		<div> <i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
	</div>
</div class="contact-form">
<h2>Contact Us</h2>
<form class="Contact" action=""  method="post">
	Your Name:<input type="text" name="name" class="text-box" placeholder="Your Name" required="" >
	Your Email:<input type="email" name="email" class="text-box" placeholder="Your Email" required="" >
	<textarea name="message" rows="5" cols="88" placeholder="Your message" required></textarea style="color: red; font-size: 26px">
	<input type="submit" name="submit" class="send-btn" value="send" style="color: red; font-size: 26px">
</form>
</body>
</html>