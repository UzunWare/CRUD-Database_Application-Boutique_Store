<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $table_email = $_POST['email'];
        $q = "update email set id = '".$id."', email = '".$table_email."' where id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayEmail.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        header("location:DisplayEmail.php");
    }

?>