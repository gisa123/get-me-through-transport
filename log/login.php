<!DOCTYPE html>
<html>
<head>
	<title>GetMeThrough</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body><?php
include 'logg.php';
?>
<form  action="mess.php" method="POST">
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and Get Me through discover great new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="name" id="name" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" id="email"required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="pass"id="pass" required>
        </label>
        
        <input type="submit" id="register" class="submit">
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>

</form>
</body>
</html>