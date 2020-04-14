<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from email where id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $email_id = $res['id'];
        $table_email = $res['email'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   

</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdateEmail.php?id=<?php echo $email_id ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Email </h1>
                </div><br>

                <label> Email: </label>
                <input type="text" name="email" class="form-control" value="<?php echo $table_email ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>