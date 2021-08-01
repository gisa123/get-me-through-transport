<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GetMeThrough</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

  <div class="page-header">
      <h2>Update bus info</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
          
            <?php
            include 'mydbCon.php';
             $ber =$_POST["bus_no"];
            $query = "SELECT * FROM bus WHERE bus_no='$ber'"; // Fetch data from the table bus using bus_no

            $result=mysqli_query($dbCon,$query);

            $cust = mysqli_fetch_assoc($result);


            ?>
            <form action="update-process.php" method="POST">

              <div class="form-group">
                <label for="exampleInputEmail1">bus_no</label>
                <input type="text" name="bus_no" class="form-control" value="<?php echo $cust['bus_no']; ?>" required="">
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">bus_model</label>
                <input type="text" name="busmode" class="form-control" value="<?php echo $cust['busmode']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="exampleInputEmail1">number_of_seat</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $cust['nofseat']; ?>" required="">
              </div>              

              <div class="form-group">
                <label for="exampleInputEmail1">departure time</label>
                <input type="time" name="dept" class="form-control" value="<?php echo $cust['dept']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">arrival time</label>
                <input type="time" name="arrival" class="form-control" value="<?php echo $cust['arrival']; ?>" required="">
              </div>

              <button type="submit" class="btn btn-primary" value="submit">Submit</button>

            </form>
        </div>
    </div>        
</div>

</body>
</html>