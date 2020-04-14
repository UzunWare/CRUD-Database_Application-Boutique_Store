<?php include "templates/header.php"; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
       <a class="navbar-brand" href="index.php">
        <img src="imgs/logo3.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Store
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Insert To
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="InsertEmployee.php">Employees</a>
                    <a class="dropdown-item" href="InsertProduct.php">Products</a>
                    <a class="dropdown-item" href="InsertStock.php">Stock</a>
                    <a class="dropdown-item" href="InsertCustomer.php">Customers</a>
                    <a class="dropdown-item" href="InsertEmail.php">Email</a>
                    <a class="dropdown-item" href="InsertPhone.php">Phone</a>
                    <a class="dropdown-item" href="InsertOnlineSale.php">Online Sales</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Display
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="DisplayEmployee.php">Employees</a>
                    <a class="dropdown-item" href="DisplayProduct.php">Products</a>
                    <a class="dropdown-item" href="DisplayStock.php">Stock</a>
                    <a class="dropdown-item" href="DisplayCustomer.php">Customers</a>
                    <a class="dropdown-item" href="DisplayEmail.php">Email</a>
                    <a class="dropdown-item" href="DisplayPhone.php">Phone</a>
                    <a class="dropdown-item" href="DisplayOnlineSale.php">Online Sales</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
            </li>

        </ul>
    </div>
    </div>
</nav>
<?php include "templates/footer.php"; ?>
