<?php

session_start();
include('../dbcon.php');

if (isset($_POST['save'])) 
{
    
    $from = $_POST['from_Data'];
    $to = $_POST['to_Data'];
    $reason = $_POST['reason'];
    


    $postData = [
        'From' => $from,
        'To' => $to,
        'reason' => $reason,
        
        
    ];

    $ref_table = "Applications";
    $postRef = $database->getReference($ref_table)->push($postData);

    if ($postRef) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: Add_Leave.php");
    }
    else{
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: Add_Leave.php");
    }

}

if (isset($_POST['reset'])) {
    
    header("refresh:0");

}


?>