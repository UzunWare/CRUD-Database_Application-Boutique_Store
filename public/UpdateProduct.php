<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $prod_category = $_POST['prodCategory'];
        $prod_name = $_POST['prodName'];
        $prod_size = $_POST['prodSize'];
        $prod_color = $_POST['prodColor'];
        $prod_price = $_POST['prodPrice'];
        $q = "update products set id = '".$id."', productName = '".$prod_name."', category = '".$prod_category."', size = '".$prod_size."', color = '".$prod_color."', price = '".$prod_price."' where id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayProduct.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        header("location:DisplayProduct.php");
    }

?>