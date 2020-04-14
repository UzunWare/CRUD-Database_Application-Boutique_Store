<?php require_once 'index.php'; ?>
<!DOCTYPE html>
<html>

<head>
    

</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center"> Products </h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th> ID# </th>
                    <th> Category </th>
                    <th> Name </th>
                    <th> Size </th>
                    <th> Color </th>
                    <th> Price </th>
                </tr>


                <?php
                
                include 'conn.php';
                $q = "select * from products";
                
                $query = mysqli_query($conn, $q);
                
                while($res = mysqli_fetch_array($query)) {
                    ?>
                <tr class="text-center">
                    <td> <?php echo $res['id'];  ?> </td>
                    <td> <?php echo $res['category'];  ?> </td>
                    <td> <?php echo $res['productName'];  ?> </td>
                    <td> <?php echo $res['size'];  ?> </td>
                    <td> <?php echo $res['color'];  ?> </td>
                    <td> <?php echo $res['price'];  ?> </td>
                    <td> <button class="btn-primary btn"> <a href="EditProduct.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a> </button> </td>
                    <td> <button class="btn-danger btn"> <a href="DeleteProduct.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>
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
