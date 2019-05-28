<?php include "/core/admin.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZOOSHOP management system</title>
    <link rel="shortcut icon" href="dist/images/favicon.png">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/main.css">

</head>

<body>
    <div class="container text-center">

        <img class="mt-3 mb-5" src="dist/images/logo.png" alt="logo" height="70px">

        <div class="row">
            <div class="col-lg-4 col-6 mt-5">
                <a class="table-link" href="/zoo/core/admin.php?products=true">
                    <div class="table-icon">
                        <img class="mb-3" src="dist/images/dog.png" alt="dog" height="100px"><br>
                        <p>Products</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-6 mt-5">
                <a class="table-link" href="/zoo/core/admin.php?delivery=true">
                    <div class="table-icon">
                        <img class="mb-3" src="dist/images/box.png" alt="box" height="100px"><br>
                        <p>Delivery</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-6 mt-5">
                <a class="table-link" href="/zoo/core/admin.php?providers=true">
                    <div class="table-icon">
                        <img class="mb-3" src="dist/images/delivery-truck.png" alt="delivery-truck.png" height="100px"><br>
                        <p>Providers</p>
                    </div>
                </a>
            </div>



            <div class="col-lg-4 col-6 mt-5">
                <a class="table-link" href="/zoo/core/admin.php?orders=true">
                    <div class="table-icon">
                        <img class="mb-3" src="dist/images/cart.png" alt="cart" height="100px"><br>
                        <p>Orders</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-6 mt-5">
                <a class="table-link" href="/zoo/core/admin.php?customers=true">
                    <div class="table-icon">
                        <img class="mb-3" src="dist/images/woman.png" alt="woman" height="100px"><br>
                        <p>Customers</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-6 mt-5">
                <a class="table-link" href="/zoo/core/admin.php?employees=true">
                    <div class="table-icon">
                        <img class="mb-3" src="dist/images/boss.png" alt="boss" height="100px"><br>
                        <p>Employees</p>
                    </div>
                </a>
            </div>
        </div>



</body>

</html>