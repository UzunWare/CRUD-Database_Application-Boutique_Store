<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $q = "delete from customers where id = ".$id."";

    mysqli_query($conn, $q);

    header('location:DisplayCustomer.php');

?>