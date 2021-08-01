<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GetMeThrough</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
<!-- client can change thier password-->
<div class="container mt-2">

  <div class="page-header">
      <h2>Change password<button type="submit" class="btn btn-lg btn-default pull-right" ><a href="dashboard.php">&larrhk;back </a></button></h2>
  </div>

    <div class="row">
        <div class="col-md-12">
                  <form action="chpass.php" method="POST">

              <div class="form-group">
                <label for="exampleInputEmail1">current password</label>
                <input type="password" name="pass1" class="form-control" required="">
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">new password</label>
                <input type="password" name="newpa" class="form-control" required="">
              </div>

              <button type="submit" class="btn btn-primary" value="Change">Change</button>

            </form>
        </div>
    </div>        
</div>

</body>
</html>
