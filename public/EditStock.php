<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from stock where product_id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $stock_sid = $res['store_id'];
        $stock_pid = $res['product_id'];
        $stock_quantity = $res['quantity'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   
</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdateStock.php?id=<?php echo $stock_pid ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Stock </h1>
                </div><br>
                
                <label> Store ID: </label>
                <input type="text" name="stockSID" class="form-control" value="<?php echo $stock_sid ?>"> <br>
                
                <label> Product ID: </label>
                <input type="text" name="stockPID" class="form-control" value="<?php echo $stock_pid ?>"> <br>
                
                <label> Quantity: </label>
                <input type="text" name="stockQuantity" class="form-control" value="<?php echo $stock_quantity ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>