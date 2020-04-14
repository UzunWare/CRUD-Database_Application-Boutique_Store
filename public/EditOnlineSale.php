<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from onlinesales where id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $onlinesale_id = $res['id'];
        $onlinesale_cid = $res['customer_id'];
        $onlinesale_pid = $res['product_id'];
        $onlinesale_quantity = $res['quantity'];
        $onlinesale_price = $res['price'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   
</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdateOnlineSale.php?id=<?php echo $onlinesale_id ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Online Sales </h1>
                </div><br>

                <label> Customer ID#: </label>
                <input type="text" name="onlinesaleCID" class="form-control" value="<?php echo $onlinesale_cid ?>"> <br>

                <label> Product ID#: </label>
                <input type="text" name="onlinesalePID" class="form-control" value="<?php echo $onlinesale_pid ?>"> <br>

                <label> Quantity: </label>
                <input type="text" name="onlinesaleQuantity" class="form-control" value="<?php echo $onlinesale_quantity ?>"> <br>

                <label> Total Amount: </label>
                <input type="text" name="onlinesaleTAmount" class="form-control" value="<?php echo $onlinesale_price ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>