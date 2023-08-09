<?php

include('connection.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];


    $sql_query = "DELETE from wallpost where sid = $id";
    $query = mysqli_query($conn,$sql_query);

    if($query){
        header('Location: displaywall.php');
    }



}


?>