<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GetMeThrough</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Add Record From Database PHP</h2>
            </div>
           
            <form action="insert-proccess.php" method="post">

                <div class="form-group">
                    <label>bus no</label>
                    <input type="text" name="busno" class="form-control" required="">
                </div>                        

                <div class="form-group">
                    <label>bus model</label>
                    <input type="text" name="busmode" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label>number of seat</label>
                    <input type="text" name="nofseat" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>departure time</label>
                    <input type="time" name="dept" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>arrival time</label>
                    <input type="time" name="arrival" class="form-control" required="">
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>
<?php include 'footer.php'; ?>
</body>
</html>