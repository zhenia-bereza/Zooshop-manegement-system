<?php

require_once "admin.php";

function show($link, $table){
    $query = "SELECT * from " . $table;

    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $prod = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $prod[] = $row;
    }

    return $prod;
}

function fields($link, $table){
    $sql = $link->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'zoo' AND TABLE_NAME = '$table'");

    if (!$sql)
        die(mysqli_error($link));

    while ($rowq = $sql->fetch_assoc()) {
        $res[] = $rowq;
    }

    $columnArr = array_column($res, 'COLUMN_NAME');

    return $columnArr;
}

function insert($link, $table, $fields_str, $variables_array){
    $sql = "INSERT INTO " . $table . " (" . $fields_str . ") VALUES (" . $variables_array . ")";
    $result = mysqli_query($link, $sql);
    return true;
}

function delete_row($link, $id, $table){
    $id = (int)$id;

    if ($id == 0)
        return false;

    $query = sprintf("DELETE FROM " . $table . " WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function select_row($id, $link, $table){
    $query = sprintf("SELECT * FROM " . $table . " WHERE id =$id");
    $result = mysqli_query($link, $query);

    $n = mysqli_num_rows($result);

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $pr[] = $row;
    }

    $arrOut = array();
    foreach ($pr as $subArr) {
        $arrOut = array_merge($arrOut, $subArr);
    }

    return $arrOut;
}

function search($search, $link, $table, $fields_str){
    $query =  "SELECT * FROM ". $table ." WHERE CONCAT(". substr($fields_str, 4) .") LIKE '%". $search ."%'";
 
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $res= array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }

    $arrOut = array();
    foreach ($res as $subArr) {
        $arrOut = array_merge($arrOut, $subArr);
    }

    return $res;
}

function edit_row($link, $table, $id, $fields_with_equal_and_values){
    $query = "UPDATE " . $table . " SET ". $fields_with_equal_and_values ." WHERE id='". $id ."'";

    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    header("Location: /zoo/core/admin.php?" . $table . "=true");
    return mysqli_affected_rows($link);
}
?>