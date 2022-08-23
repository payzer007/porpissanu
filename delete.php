<?php
    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM pele2 WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>