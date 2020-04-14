<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['stockSID']) || empty($_POST['stockQuantity']) || empty($_POST['stockPID']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $stock_quantity = $_POST['stockQuantity'];
            $stock_pid = $_POST['stockPID'];
            $stock_sid = $_POST['stockSID'];
            $q = "insert into stock (quantity, product_id, store_id) values ('$stock_quantity', '$stock_pid', '$stock_sid')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayStock.php');
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
                    <h1 class="text-white text-center"> Add Product to Stock </h1>
                </div><br>
                
                <label> Store ID: </label>
                <input type="text" name="stockSID" class="form-control"> <br>
                
                <label> Product ID: </label>
                <input type="text" name="stockPID" class="form-control"> <br>
                
                <label> Quantity: </label>
                <input type="text" name="stockQuantity" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
