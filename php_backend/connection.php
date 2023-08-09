<?php
$server = "localhost";
$username = "root";
$password="";
$db="friendzone";

$conn = mysqli_connect($server,$username,$password,$db);

if($conn){
    
    
}

else {
    echo 'unsuccessful'.mysqli_connect_error();
}



?>