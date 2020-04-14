<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $table_phone = $_POST['phone'];
        $q = "update phone set id = '".$id."', phone = '".$table_phone."' where id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayPhone.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        header("location:DisplayPhone.php");
    }

?>