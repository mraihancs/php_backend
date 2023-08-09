<?php

#check if the user logged in 

if(isset($_SESSION['email']))
{
      header ('Location: index.php');
      exit;
}
include('connection.php');
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$pass'";
    $query = mysqli_query($conn,$sql );
    
   $count= mysqli_num_rows($query);
    if($count>0){
        $row = mysqli_fetch_assoc($query);
        
        session_start();
        $_SESSION['email']= $email;
       
        header('Location: index.php');

        exit;

    }

    else{
        echo '<div class="alert alert-danger">Invalid </div>';
    }

}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>







<form action="login.php" method="POST" style="width: 30%; margin-left: 30%;margin-top: 15%;">
    <div class="container">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button name="submit" type="submit" class="btn btn-info">Submit</button>
    </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>