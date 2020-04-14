<?php

    include 'conn.php';
    
    if(isset($_POST['done'])) {
        if(empty($_POST['email']))
        {
            echo 'Please Fill in The Blanks...';
        }
        else
        {
            $email = $_POST['email'];
            $q = "insert into email (email)
                values ('$email')";
            
            $result = mysqli_query($conn, $q);

            if($result){
                header('location:DisplayEmail.php');
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
                    <h1 class="text-white text-center"> Add Email </h1>
                </div><br>

                <label> Email: </label>
                <input type="text" name="email" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>
