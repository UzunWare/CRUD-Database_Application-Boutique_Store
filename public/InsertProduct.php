<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['prodCategory']) || empty($_POST['prodName']) || empty($_POST['prodSize']) || empty($_POST['prodColor']) || empty($_POST['prodPrice']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $prod_id = NULL;
            $prod_category = $_POST['prodCategory'];
            $prod_name = $_POST['prodName'];
            $prod_size = $_POST['prodSize'];
            $prod_color = $_POST['prodColor'];
            $prod_price = $_POST['prodPrice'];
            $q = "insert into products (id, productName, category, size, color, price)
                values ('$prod_id', '$prod_name', '$prod_category', '$prod_size', '$prod_color', '$prod_price')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayProduct.php');
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
                    <h1 class="text-white text-center"> Add Product </h1>
                </div><br>

                <label> Product Category: </label>
                <input type="text" name="prodCategory" class="form-control"> <br>

                <label> Product Name: </label>
                <input type="text" name="prodName" class="form-control"> <br>

                <label> Product Size: </label>
                <input type="text" name="prodSize" class="form-control"> <br>

                <label> Product Color: </label>
                <input type="text" name="prodColor" class="form-control"> <br>

                <label> Product Price: </label>
                <input type="text" name="prodPrice" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
