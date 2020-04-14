<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['onlinesaleCID']) || empty($_POST['onlinesalePID']) || empty($_POST['onlinesaleQuantity']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $onlinesale_id = NULL;
            $onlinesale_cid = $_POST['onlinesaleCID'];
            $onlinesale_pid = $_POST['onlinesalePID'];
            $onlinesale_quantity = $_POST['onlinesaleQuantity'];
            $pprice = "select price from products where id = '".$onlinesale_pid."'";
            $result = mysqli_query($conn, $pprice);
            
            while($res = mysqli_fetch_assoc($result))
            {
                $onlinesale_tamount = $res['price'];
            }
            
            $onlinesale_tamount = $onlinesale_tamount * $onlinesale_quantity;
            
            $query2 = "update stock set quantity = quantity - '".$onlinesale_quantity."' where product_id = '".$onlinesale_pid."'";
            
            $q = "insert into onlinesales (id, customer_id, product_id, quantity, price)
                values ('$onlinesale_id', '$onlinesale_cid', '$onlinesale_pid', '$onlinesale_quantity', '$onlinesale_tamount')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayOnlineSale.php');
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
                    <h1 class="text-white text-center"> Add Online Sale </h1>
                </div><br>

                <label> Customer ID#: </label>
                <input type="text" name="onlinesaleCID" class="form-control"> <br>

                <label> Product ID#: </label>
                <input type="text" name="onlinesalePID" class="form-control"> <br>

                <label> Quantity: </label>
                <input type="text" name="onlinesaleQuantity" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
