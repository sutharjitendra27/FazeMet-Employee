<?php
session_start();
include('../dbcon.php');

if (isset($_POST['update_Data'])) {

    $key = $_POST['key'];
    $officer_ID = $_POST['of_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password   = $_POST['pass'];
    // $course = $_POST['course'];
    // $college = $_POST['college'];
    // $gname = $_POST['gname'];
    // $gMobile = $_POST['gMobile'];


    $updateData = [
        'Officer ID' => $officer_ID,
        'First Name' => $fname,
        'Last Name' => $lname,
        'Date of Birth' => $dob,
        'Mobile No' => $mobile,
        'Email' => $email,
        'Gender' => $gender,
        'Address' => $address,
        'Password' => $password,
        // 'Course' => $course,
        // 'College' => $college,
        // 'Gaurdian Name' => $gname,
        // 'Gaurdian Mobile no' => $gMobile,
        // 'Status' => 'Active',
    ];

    $ref_table = 'Officers/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: Manage Officers.php");
    }
    else {
        $_SESSION['status'] = "Data Not Updated";
        header("Location: Manage Officers.php");
    }

}

if (isset($_POST['reset'])){

    header("refresh:0");

}
?>