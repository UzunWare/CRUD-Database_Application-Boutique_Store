<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['empFName']) || empty($_POST['empLName']) || empty($_POST['empSalary']) || empty($_POST['empSex']) || empty($_POST['empBirthdate']) || empty($_POST['empSID']) || empty($_POST['empEID']) || empty($_POST['empPID']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $emp_fname = $_POST['empFName'];
            $emp_lname = $_POST['empLName'];
            $emp_salary = $_POST['empSalary'];
            $emp_sex = $_POST['empSex'];
            $emp_birthdate = $_POST['empBirthdate'];
            $emp_sid = $_POST['empSID'];
            $emp_eid = $_POST['empEID'];
            $emp_pid = $_POST['empPID'];
            $q = "insert into employees (first_name, last_name, salary, sex, birthdate, store_id, email_id, phone_id) values ('$emp_fname', '$emp_lname', '$emp_salary', '$emp_sex', '$emp_birthdate', '$emp_sid', '$emp_eid', '$emp_pid')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayEmployee.php');
            }
            else{
                echo "Record Not Inserted!";
            }
        }
        
    }
?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="col-lg-6 m-auto">

        <form method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Add Employee </h1>
                </div><br>

                <label> First Name: </label>
                <input type="text" name="empFName" class="form-control"> <br>

                <label> Last Name: </label>
                <input type="text" name="empLName" class="form-control"> <br>

                <label> Salary: </label>
                <input type="text" name="empSalary" class="form-control"> <br>

                <label> Sex: </label>
                <input type="text" name="empSex" class="form-control"> <br>

                <label> Birthdate: </label>
                <input type="text" name="empBirthdate" class="form-control"> <br>
                
                <label> Store ID#: </label>
                <input type="text" name="empSID" class="form-control"> <br>

                <label> Email ID#: </label>
                <input type="text" name="empEID" class="form-control"> <br>
                
                <label> Phone ID#: </label>
                <input type="text" name="empPID" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
