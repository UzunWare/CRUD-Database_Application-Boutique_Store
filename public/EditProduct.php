<?php
    require_once("conn.php");
    $id = $_GET['id'];
    $q = "select * from products where id = '".$id."'";
    $result = mysqli_query($conn, $q);
    
    while($res = mysqli_fetch_assoc($result))
    {
        $prod_id = $res['id'];
        $prod_category = $res['category'];
        $prod_name = $res['productName'];
        $prod_size = $res['size'];
        $prod_color = $res['color'];
        $prod_price = $res['price'];
    }

?>

<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html>

<head>
   
</head>

<body>
    <div class="col-lg-6 m-auto">

        <form action="UpdateProduct.php?id=<?php echo $prod_id ?>" method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Product </h1>
                </div><br>

                <label> Product Category: </label>
                <input type="text" name="prodCategory" class="form-control" value="<?php echo $prod_category ?>"> <br>

                <label> Product Name: </label>
                <input type="text" name="prodName" class="form-control" value="<?php echo $prod_name ?>"> <br>

                <label> Product Size: </label>
                <input type="text" name="prodSize" class="form-control" value="<?php echo $prod_size ?>"> <br>

                <label> Product Color: </label>
                <input type="text" name="prodColor" class="form-control" value="<?php echo $prod_color ?>"> <br>

                <label> Product Price: </label>
                <input type="text" name="prodPrice" class="form-control" value="<?php echo $prod_price ?>"> <br>

                <button class="btn btn-success" type="submit" name="update"> Update </button><br>

            </div>
        </form>
    </div>
</body>

</html>