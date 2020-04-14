<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from phone where id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $phone_id = $res['id'];
        $table_phone = $res['phone'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   

</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdatePhone.php?id=<?php echo $phone_id ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Phone </h1>
                </div><br>

                <label> Phone: </label>
                <input type="text" name="phone" class="form-control" value="<?php echo $table_phone ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>