<?php
session_start();
include('../dbcon.php');

if (isset($_POST['save_Data'])) {
    
    $Student_ID = $_POST['st_Id'];
    $name = $_POST['Name'];
    $Date = $_POST['Date'];
    $time = $_POST['Time'];
    $status = $_POST['status'];
    $subject = $_POST['Subject'];
    $class = $_POST['Class'];

    $postData = [
        'Student ID' => $Student_ID,
        'Name' => $name,
        'Date' => $Date,
        'Time' => $time,
        'status' => $status,
        'Subject' => $subject,
        'Class' => $class,
    ];
    
    $ref_table= "Activity";
    $postRef = $database->getReference($ref_table)->push($postData);

    if ($postRef) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: Add New Student.php");
    }
    else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: Add New Student.php");
    }

}


?>