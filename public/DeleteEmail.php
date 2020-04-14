<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $q = "delete from email where id = ".$id."";

    mysqli_query($conn, $q);

    header('location:DisplayEmail.php');

?>