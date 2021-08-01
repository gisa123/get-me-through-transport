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
           
            <form action="insert-proccess1.php" method="post">

                <div class="form-group">
                    <label>journey_from</label>
                    <input type="text" name="jrny1" class="form-control" required="">
                </div>                        

                <div class="form-group">
                    <label>journey_to</label>
                    <input type="text" name="jrny2" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label>date</label>
                    <input type="date" name="dte" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>book id</label>
                    <input type="text" name="bk1" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>
<?php include 'footer.php'; ?>
</body>
</html>