<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from employees where id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $emp_id = $res['id'];
        $emp_fname = $res['first_name'];
        $emp_lname = $res['last_name'];
        $emp_salary = $res['salary'];
        $emp_sex = $res['sex'];
        $emp_birthdate = $res['birthdate'];
        $emp_sid = $res['store_id'];
        $emp_eid = $res['email_id'];
        $emp_pid = $res['phone_id'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   

</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdateEmployee.php?id=<?php echo $emp_id ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Employee </h1>
                </div><br>
                
                <label> Employee ID#: </label>
                <input type="text" name="empFName" class="form-control" value="<?php echo $emp_id ?>"> <br>

                <label> First Name: </label>
                <input type="text" name="empFName" class="form-control" value="<?php echo $emp_fname ?>"> <br>

                <label> Last Name: </label>
                <input type="text" name="empLName" class="form-control" value="<?php echo $emp_lname ?>"> <br>

                <label> Salary: </label>
                <input type="text" name="empSalary" class="form-control" value="<?php echo $emp_salary ?>"> <br>

                <label> Sex: </label>
                <input type="text" name="empSex" class="form-control" value="<?php echo $emp_sex ?>"> <br>

                <label> Birthdate: </label>
                <input type="text" name="empBirthdate" class="form-control" value="<?php echo $emp_birthdate ?>"> <br>
                
                <label> Store ID#: </label>
                <input type="text" name="empSID" class="form-control" value="<?php echo $emp_sid ?>"> <br>

                <label> Email ID#: </label>
                <input type="text" name="empEID" class="form-control" value="<?php echo $emp_eid ?>"> <br>
                
                <label> Phone ID#: </label>
                <input type="text" name="empPID" class="form-control" value="<?php echo $emp_pid ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>