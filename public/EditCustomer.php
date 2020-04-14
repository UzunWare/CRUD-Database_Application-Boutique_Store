<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from customers where id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $cus_id = $res['id'];
        $cus_fname = $res['first_name'];
        $cus_lname = $res['last_name'];
        $cus_eid = $res['email_id'];
        $cus_pid = $res['phone_id'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   

</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdateCustomer.php?id=<?php echo $cus_id ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Customer </h1>
                </div><br>

                <label> First Name: </label>
                <input type="text" name="cusFName" class="form-control" value="<?php echo $cus_fname ?>"> <br>

                <label> Last Name: </label>
                <input type="text" name="cusLName" class="form-control" value="<?php echo $cus_lname ?>"> <br>

                <label> Email ID#: </label>
                <input type="text" name="cusEID" class="form-control" value="<?php echo $cus_eid ?>"> <br>
                
                <label> Phone ID#: </label>
                <input type="text" name="cusPID" class="form-control" value="<?php echo $cus_pid ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>