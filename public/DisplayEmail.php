<?php require_once 'index.php'; ?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center"> Email </h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th> ID# </th>
                    <th> Email </th>
                </tr>


                <?php
                
                include 'conn.php';
                $q = "select * from email";
                
                $query = mysqli_query($conn, $q);
                
                while($res = mysqli_fetch_array($query)) {
                    ?>
                <tr class="text-center">
                    <td> <?php echo $res['id'];  ?> </td>
                    <td> <?php echo $res['email'];  ?> </td>
                    <td> <button class="btn-primary btn"> <a href="EditEmail.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a> </button> </td>
                    <td> <button class="btn-danger btn"> <a href="DeleteEmail.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>
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
