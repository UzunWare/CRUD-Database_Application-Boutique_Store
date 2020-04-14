<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $onlinesale_cid = $_POST['onlinesaleCID'];
        $onlinesale_pid = $_POST['onlinesalePID'];
        $onlinesale_quantity = $_POST['onlinesaleQuantity'];
        $onlinesale_tamount = $_POST['onlinesaleTAmount'];
        $q = "update onlinesales set id = '".$id."', customer_id = '".$onlinesale_cid."', product_id = '".$onlinesale_pid."', quantity = '".$onlinesale_quantity."', price = '".$onlinesale_tamount."' where id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayOnlineSale.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        header("location:DisplayOnlineSale.php");
    }

?>