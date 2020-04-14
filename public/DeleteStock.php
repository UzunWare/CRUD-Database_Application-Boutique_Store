<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $q = "delete from stock where product_id = ".$id."";

    mysqli_query($conn, $q);

    header('location:DisplayStock.php');

?>