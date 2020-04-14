<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $q = "delete from phone where id = ".$id."";

    mysqli_query($conn, $q);

    header('location:DisplayPhone.php');

?>