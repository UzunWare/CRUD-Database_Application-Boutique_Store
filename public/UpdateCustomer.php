<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $cus_fname = $_POST['cusFName'];
        $cus_lname = $_POST['cusLName'];
        $cus_eid = $_POST['cusEID'];
        $cus_pid = $_POST['cusPID'];
        $q = "update customers set id = '".$id."', first_name = '".$cus_fname."', last_name = '".$cus_lname."', email_id = '".$cus_eid."', phone_id = '".$cus_pid."' where id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayCustomer.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        header("location:DisplayCustomer.php");
    }

?>