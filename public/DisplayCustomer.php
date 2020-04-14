<?php require_once 'index.php'; ?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center"> Customers </h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th> ID# </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Email ID# </th>
                    <th> Phone ID# </th>
                </tr>


                <?php
                
                include 'conn.php';
                $q = "select * from customers";
                
                $query = mysqli_query($conn, $q);
                
                while($res = mysqli_fetch_array($query)) {
                    ?>
                <tr class="text-center">
                    <td> <?php echo $res['id'];  ?> </td>
                    <td> <?php echo $res['first_name'];  ?> </td>
                    <td> <?php echo $res['last_name'];  ?> </td>
                    <td> <?php echo $res['email_id'];  ?> </td>
                    <td> <?php echo $res['phone_id'];  ?> </td>
                    <td> <button class="btn-primary btn"> <a href="EditCustomer.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a> </button> </td>
                    <td> <button class="btn-danger btn"> <a href="DeleteCustomer.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>
                </tr>

                <?php 
                }
                ?>


            </table>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabledata').DataTable();
        })

    </script>
</body>

</html>
