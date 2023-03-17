<?php
session_start();
include('../dbcon.php');

if (isset($_POST['save_Data'])) {
    
    $officer_ID = $_POST['of_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password   = $_POST['pass'];

    /*$course = $_POST['course'];
    $college = $_POST['college'];
    $gname = $_POST['gname'];
    $gMobile = $_POST['gMobile'];*/


    $postData = [
        'Officer ID' => $officer_ID,
        'First Name' => $fname,
        'Last Name' => $lname,
        'Date of Birth' => $dob,
        'Mobile No' => $mobile,
        'Email' => $email,
        'Gender' => $gender,
        'Address' => $address,
        'Password' => $password,
        'IsLogged' => 'False',
        // 'Course' => $course,
        // 'College' => $college,
        // 'Gaurdian Name' => $gname,
        // 'Gaurdian Mobile no' => $gMobile,
        // 'Status' => 'Active',
    ];
    $ref_table= "Officers"."/"."$mobile";

    $postRef = $database->getReference($ref_table)->set($postData);

    if ($postRef) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: Add New Officer.php");
    }
    else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: Add New Officer.php");
    }

}


?>