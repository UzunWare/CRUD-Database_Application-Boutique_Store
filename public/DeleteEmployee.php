<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $q = "delete from employees where id = ".$id."";

    mysqli_query($conn, $q);

    header('location:DisplayEmployee.php');

?>