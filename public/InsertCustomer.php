<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['cusEID']) || empty($_POST['cusPID']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $cus_fname = $_POST['firstName'];
            $cus_lname = $_POST['lastName'];
            $cus_eid = $_POST['cusEID'];
            $cus_pid = $_POST['cusPID'];
            $q = "insert into customers (first_name, last_name, email_id, phone_id)
                values ('$cus_fname', '$cus_lname', '$cus_eid', '$cus_pid')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayCustomer.php');
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
                    <h1 class="text-white text-center"> Add Customer </h1>
                </div><br>

                <label> First Name: </label>
                <input type="text" name="firstName" class="form-control"> <br>

                <label> Last Name: </label>
                <input type="text" name="lastName" class="form-control"> <br>

                <label> Email ID#: </label>
                <input type="text" name="cusEID" class="form-control"> <br>

                <label> Phone ID#: </label>
                <input type="text" name="cusPID" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
