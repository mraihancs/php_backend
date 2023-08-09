<?php
include('connection.php');

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>








    <table class="table">
        <thead>
          <tr>
            <th scope="col">SNO</th>
            <th scope="col">POST</th>
            <th scope="col">Operation</th>
          
          </tr>
        </thead>
        <tbody>

        <?php

$sql = "SELECT * FROM `wallpost`";

$query = mysqli_query($conn,$sql);

$count = mysqli_num_rows($query);

if($count>0)
{
    while($row = mysqli_fetch_assoc($query))
    {


        $sid = $row['sid'];
        $share = $row['share'];

echo '<tr>';
    echo '<th scope="row">' .  $sid .'</th>';
    echo '<td>' . $share . '</td>';
    echo '<td>';
      echo  '<button class="btn btn-info"><a style="text-decoration: none;color: aliceblue;" href="update.php?updateid='.$sid.'">Update</a></button>';
     echo '<button class="btn btn-danger"><a style="text-decoration: none;color: aliceblue;" href="delete.php? deleteid=' .$sid. '">Delete</a></button>';
    echo '</td>';
 echo '</tr>';
        


    }
}

            else{
    
        echo "Error Occurs";
    
}


?>
         
</tbody>
</table>


   









</body>

</html>