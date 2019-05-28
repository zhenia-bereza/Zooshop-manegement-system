<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="shortcut icon" href="../dist/images/favicon.png">

    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <script src="../dist/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">

        <div class="row align-items-center mt-3 mb-3">
            <div class="col-md-4 col-12 text-md-left text-center">
                <a href="/zoo"><img src="../dist/images/logo.png" alt="logo" height="70px"></a>
            </div>
            <div class="col-md-8 col-12 text-md-right text-center">
                <div class="nav-links mt-md-0 mt-3">
                    <a href="admin.php?products=true">Products</a>
                    <a href="admin.php?delivery=true">Delivery</a>
                    <a href="admin.php?providers=true">Providers</a>
                    <a href="admin.php?orders=true">Orders</a>
                    <a href="admin.php?customers=true">Customers</a>
                    <a href="admin.php?employees=true" class="active-link">Employees</a>           
                </div>
            </div>
        </div>


        <div class="search mt-5 mb-4">
           
            <form class="input-group" action="admin.php" method="POST">  
                <input type="hidden" name="employees">  
                <input type="text" name="search-result" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <input class="btn btn-success" type="submit" name="search" value="Search">
                </div>
            </form>
            
            <div class="ml-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i></button>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form" action="admin.php" method="POST">
                        <div class="modal-body">
                            <label>Initials</label>
                            <input class="form-control" type="text" name="employee_initials"><br>

                            <label>Position</label>
                            <input class="form-control" type="text" name="employee_position"><br>

                            <label>Phone</label>
                            <input class="form-control" type="text" name="employee_phone"><br>

                            <label>Address</label>
                            <input class="form-control" type="text" name="employee_address"><br>

                            <input type="hidden" name="employees">
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-success" type="submit" name="save" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit</h5>
                        <button type="button" onclick="closeModal();" class="openModal close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form" action="admin.php" method="POST">
                        <div class="modal-body">
                            <label>Initials</label>
                            <input class="form-control" value="<?= $selected_row['employee_initials'] ?>" type="text" name="employee_initials"><br>

                            <label>Position</label>
                            <input class="form-control" value="<?= $selected_row['employee_position'] ?>" type="text" name="employee_position"><br>

                            <label>Phone</label>
                            <input class="form-control" value="<?= $selected_row['employee_phone'] ?>" type="text" name="employee_phone"><br>

                            <label>Address</label>
                            <input class="form-control" value="<?= $selected_row['employee_address'] ?>" type="text" name="employee_address"><br>

                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="employees">
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-warning" type="submit" name="edit" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php echo $show_modal ?>

        <div class="table-responsive mb-5">
            <table class="table table-hover text-center">
                <tr class="bg-success" style="color: white;">
                    <td>№</td>
                    <td>Employee</td>
                    <td>Position</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td colspan="2">Tools</td>
                </tr>
                <?php foreach ((array)$data as $d) : ?>
                    <tr>
                        <?php foreach ($d as $item) : ?>
                            <td><?= $item; ?></td>
                        <?php endforeach ?>
                        <td><a class="btn btn-warning" <?= $init_modal ?> href="admin.php?employees=true&action=edit&id=<?= $d['id'] ?>"><i class="fas fa-pen"></i></a></td>
                        <td><a class="btn btn-danger" href="admin.php?employees=true&action=delete&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <script>
            function closeModal() {
                window.location.replace("/zoo/core/admin.php?employees=true");
            }
        </script>

</body>

</html>