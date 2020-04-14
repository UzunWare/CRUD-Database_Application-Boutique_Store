<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $q = "delete from onlinesales where id = ".$id."";

    mysqli_query($conn, $q);

    header('location:DisplayOnlineSale.php');

?>