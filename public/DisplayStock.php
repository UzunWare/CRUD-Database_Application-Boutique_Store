<?php require_once 'index.php'; ?>
<!DOCTYPE html>
<html>

<head>
    
</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center"> Stock </h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th> Store ID# </th>
                    <th> Product ID# </th>
                    <th> Product Name </th>
                    <th> Quantity </th>            
                </tr>


                <?php
                
                include 'conn.php';
                $q = "select store_id, product_id, quantity, productName from stock s inner join products p on s.product_id = p.id";
                
                $query = mysqli_query($conn, $q);
                
                while($res = mysqli_fetch_array($query)) {
                    ?>
                <tr class="text-center">
                    <td> <?php echo $res['store_id'];  ?> </td>
                    <td> <?php echo $res['product_id'];  ?> </td>
                    <td> <?php echo $res['productName'];  ?> </td>
                    <td> <?php echo $res['quantity'];  ?> </td>
                    <td> <button class="btn-primary btn"> <a href="EditStock.php?id=<?php echo $res['product_id']; ?>" class="text-white"> Edit </a> </button> </td>
                    <td> <button class="btn-danger btn"> <a href="DeleteStock.php?id=<?php echo $res['product_id']; ?>" class="text-white"> Delete </a> </button> </td>
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
