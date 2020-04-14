<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $stock_sid = $_POST['stockSID'];
        $stock_quantity = $_POST['stockQuantity'];
        $q = "update stock set quantity = '".$stock_quantity."' where product_id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayStock.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        
    }

?>