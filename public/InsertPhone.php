<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['phone']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $phone = $_POST['phone'];
            $q = "insert into phone (phone)
                values ('$phone')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayPhone.php');
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
                    <h1 class="text-white text-center"> Add Phone </h1>
                </div><br>

                <label> Phone: </label>
                <input type="text" name="phone" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
