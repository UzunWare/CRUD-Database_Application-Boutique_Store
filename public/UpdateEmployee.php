<?php

    include 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $emp_fname = $_POST['empFName'];
        $emp_lname = $_POST['empLName'];
        $emp_salary = $_POST['empSalary'];
        $emp_sex = $_POST['empSex'];
        $emp_birthdate = $_POST['empBirthdate'];
        $emp_sid = $_POST['empSID'];
        $emp_eid = $_POST['empEID'];
        $emp_pid = $_POST['empPID'];
        $q = "update employees set id = '".$id."', first_name = '".$emp_fname."', last_name = '".$emp_lname."', salary = '".$emp_salary."', sex = '".$emp_sex."', birthdate = '".$emp_birthdate."', store_id = '".$emp_sid."', email_id = '".$emp_eid."', phone_id = '".$emp_pid."' where id = '".$id."'";
        $query = mysqli_query($conn, $q);
        
        if($query)
        {
            header('location:DisplayEmployee.php');    
        }
        else
        {
            echo 'Please Check Your Query...';
        }
        
    }
    else
    {
        header("location:DisplayEmployee.php");
    }

?>