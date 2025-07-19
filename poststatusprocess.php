<?php

include("resetdb.php");

if(isset($_POST["post"])){
    $stcode = $_POST['stcode'];
    $st = $_POST['st'];
    $share = $_POST['share'];
    $date = $_POST['date'];
    $perm = isset($_POST['permission']) ? $_POST['permission'] : array();
    $permission = is_array($perm) ? implode(",",$perm) : "";

    // Validate status code format
    if (!preg_match('/^S\d{4}$/', $stcode)) {
        echo 'Status code should start with an uppercase "S" followed by 4 digits (e.g., S0001)';
    } elseif ($stcode == '' || $stcode === NULL) {
        echo 'You need to fill the status code';
    } else {
        // Check if status code is unique
        $check_query = "SELECT * FROM `status` WHERE `stcode` = '$stcode'";
        $check_result = mysqli_query($connection, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            echo 'Status code must be unique';
        } else {
            // Insert the status into the database
            $query = "INSERT INTO `status` (`stcode`, `st`, `share`, `date`, `permission`) VALUES ('$stcode', '$st', '$share', '$date', '$permission')";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("Query Failed: " . mysqli_error($connection));
            } else {
                echo 'Your data has been updated.';
            }
        }
    }
}
?>