<?php
require_once("database.php");
require_once("queries.php");

$link = db_conneсt();

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";


if (isset($_GET['products']) || isset($_POST['products'])) {
    $table = 'products';
    $fields = fields($link, $table);
    $data = show($link, $table);
    $fields_str = implode(", ", $fields);

    $variables = [
        $_POST['id'], $_POST['delivery_id'], $_POST['product_name'],
        $_POST['product_description'], $_POST['product_amount'], $_POST['product_price']
    ];

    $id = $_GET['id'];


    if ($_POST['save']) {
        add($link, $table, $fields, $variables);
    }

    if ($action == "edit") {   
        $selected_row = select_row($id, $link, $table);
        $init_modal =  ' data-toggle="modal" data-target="#edit" ';
        $show_modal = "<script>$('#edit').modal('show');</script>";
    }

    if($_POST['edit']){
        edit($link, $id , $table, $fields_str, $variables);
    }

    if ($action == "delete") {
        remove($link, $id , $table);
    }

    if($_POST['search']){
        $search = $_POST['search-result'];
        $data = search($search, $link, $table, $fields_str);
    }

    include("../view/products.php");

} else if (isset($_GET['orders']) || isset($_POST['orders'])) {
    $table = 'orders';
    $fields = fields($link, $table);
    $fields_str = implode(", ", $fields);
    $data = show($link, $table);

    $variables = [
        $_POST['id'], $_POST['product_id'], $_POST['employee_id'],
        $_POST['customer_id'], $_POST['order_date']
    ];
    $id = $_GET['id'];


    if ($_POST['save']) {
        add($link, $table, $fields, $variables);
    }

    if ($action == "edit") {   
        $selected_row = select_row($id, $link, $table);
        $init_modal =  ' data-toggle="modal" data-target="#edit" ';
        $show_modal = "<script>$('#edit').modal('show');</script>";
    }

    if($_POST['edit']){
        edit($link, $id , $table, $fields_str, $variables);
    }

    if ($action == "delete") {
        remove($link, $id , $table);
    }

    if($_POST['search']){
        $search = $_POST['search-result'];
        $data = search($search, $link, $table, $fields_str);
    }

    include("../view/orders.php");

} else if (isset($_GET['employees']) || isset($_POST['employees'])) {
    $table = 'employees';
    $fields = fields($link, $table);
    $fields_str = implode(", ", $fields);
    $data = show($link, $table);

    $variables = [
        $_POST['id'], $_POST['employee_initials'], $_POST['employee_position'],
        $_POST['employee_phone'], $_POST['employee_address']
    ];
    $id = $_GET['id'];


    if ($_POST['save']) {
        add($link, $table, $fields, $variables);
    }

    if ($action == "edit") {   
        $selected_row = select_row($id, $link, $table);
        $init_modal =  ' data-toggle="modal" data-target="#edit" ';
        $show_modal = "<script>$('#edit').modal('show');</script>";
    }

    if($_POST['edit']){
        edit($link, $id , $table, $fields_str, $variables);
    }

    if ($action == "delete") {
        remove($link, $id , $table);
    }

    if($_POST['search']){
        $search = $_POST['search-result'];
        $data = search($search, $link, $table, $fields_str);
    }

    include("../view/employees.php");

} else if (isset($_GET['customers']) || isset($_POST['customers'])) {
    $table = 'customers';
    $fields = fields($link, $table);
    $fields_str = implode(", ", $fields);
    $data = show($link, $table);

    $variables = [$_POST['id'], $_POST['customer_initials'], $_POST['customer_pet'], $_POST['customer_phone']];
    $id = $_GET['id'];


    if ($_POST['save']) {
        add($link, $table, $fields, $variables);
    }

    if ($action == "edit") {   
        $selected_row = select_row($id, $link, $table);
        $init_modal =  ' data-toggle="modal" data-target="#edit" ';
        $show_modal = "<script>$('#edit').modal('show');</script>";
    }

    if($_POST['edit']){
        edit($link, $id , $table, $fields_str, $variables);
    }

    if ($action == "delete") {
        remove($link, $id , $table);
    }

    if($_POST['search']){
        $search = $_POST['search-result'];
        $data = search($search, $link, $table, $fields_str);
    }

    include("../view/customers.php");

} else if (isset($_GET['delivery']) || isset($_POST['delivery'])) {
    $table = 'delivery';
    $fields = fields($link, $table);
    $fields_str = implode(", ", $fields);
    $data = show($link, $table);

    $variables = [$_POST['id'], $_POST['provider_id'], $_POST['delivery_date']];
    $id = $_GET['id'];


    if ($_POST['save']) {
        add($link, $table, $fields, $variables);
    }

    if ($action == "edit") {   
        $selected_row = select_row($id, $link, $table);
        $init_modal =  ' data-toggle="modal" data-target="#edit" ';
        $show_modal = "<script>$('#edit').modal('show');</script>";
    }

    if($_POST['edit']){
        edit($link, $id , $table, $fields_str, $variables);
    }

    if ($action == "delete") {
        remove($link, $id , $table);
    }

    if($_POST['search']){
        $search = $_POST['search-result'];
        $data = search($search, $link, $table, $fields_str);
    }

    include("../view/delivery.php");

} else if (isset($_GET['providers']) || isset($_POST['providers'])) {
    $table = 'providers';
    $fields = fields($link, $table);
    $fields_str = implode(", ", $fields);
    $data = show($link, $table);

    $variables = [$_POST['id'], $_POST['provider_name'], $_POST['provider_phone'], $_POST['provider_website']];
    $id = $_GET['id'];


    if ($_POST['save']) {
        add($link, $table, $fields, $variables);
    }

    if ($action == "edit") {   
        $selected_row = select_row($id, $link, $table);
        $init_modal =  ' data-toggle="modal" data-target="#edit" ';
        $show_modal = "<script>$('#edit').modal('show');</script>";
    }

    if($_POST['edit']){
        edit($link, $id , $table, $fields_str, $variables);
    }

    if ($action == "delete") {
        remove($link, $id , $table);
    }

    if($_POST['search']){
        $search = $_POST['search-result'];
        $data = search($search, $link, $table, $fields_str);
    }

    include("../view/providers.php");

}

function add($link, $table, $fields, $variables){
    $fields_str = implode(", ", $fields);

    for ($i = 0; $i < count($variables); $i++) {
        $temp_array[] = '\'' . $variables[$i] . '\'';
    }

    $variables_array = implode(",", $temp_array);

    insert($link, $table, $fields_str, $variables_array);
    header("Location: /zoo/core/admin.php?" . $table . "=true");
}

function edit($link, $id , $table, $fields_str, $variables){
    $id = $_POST['id'];
    $fields_array_temp = explode(", ", substr($fields_str, 3));
    $fields_with_equal = [];
    array_shift($variables);

    foreach($fields_array_temp as $v){
        $fields_with_equal[] .= $v . "=";
    }

    for($i=0; $i<count($variables); $i++){
        $fields_with_equal[$i] .= "'" . $variables[$i] . "'";
    }

    $fields_with_equal_and_values = implode(", ", $fields_with_equal);

    edit_row($link, $table, $id, $fields_with_equal_and_values);
}

function remove($link, $id , $table){
    delete_row($link, $id, $table);
    header("Location: /zoo/core/admin.php?" . $table . "=true");
}