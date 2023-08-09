<?php

session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends Zone</title>
</head>
<body>
    <h1>Home</h1>
</body>
</html>