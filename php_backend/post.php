
<?php
include('connection.php');



?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h3>Share your feelings...</h3>
    <?php

if(isset($_POST['submit'])){
    $maruf = $_POST['testpost'];

    $sql_query = "INSERT INTO `wallpost` (`share`) VALUES ('$maruf')";
    $query = mysqli_query($conn,$sql_query);

    if($query){
        echo '<div class="alert alert-success" role="alert">
        Posted Successfully
      </div>';
    }

    else{
        echo 'Error occurs'.mysqli_connect.error();
    }




}



?>

    <form action="post.php" method="POST" style="width: 30%; margin-left: 30%;margin-top: 15%;">
        <div class="container">
            <div style="margin: 30%;" class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Wall ::</label>
                <textarea name="testpost" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
    
            <button name="submit" type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>

   

</body>
</html>