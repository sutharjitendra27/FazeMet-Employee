<?php
session_start();
include('../dbcon.php');

if (isset($_POST['update_Data'])) {

    $name = $_POST['name'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    


    $updateData = [
        'Name' => $name,
        'Time' => $time,
        'Date' => $date,
        'status' => $status,
    ];

    $ref_table = 'Activity/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: Update_Officers.php");
    }
    else {
        $_SESSION['status'] = "Data Not Updated";
        header("Location: Update_Officers.php");
    }

}

if (isset($_POST['reset'])){

    header("refresh:0");

}
?>