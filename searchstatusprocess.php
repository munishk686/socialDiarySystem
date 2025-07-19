<?php
include("resetdb.php");

if(isset($_GET["search"])){
    $search = $_GET["search"];

    $query = "SELECT * FROM `status` WHERE `st` = '$search'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    } else {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Status: {$row['st']}<br>";
            echo "Status Code: {$row['stcode']}<br><br>";
            echo "Share: {$row['share']}<br>";
            echo "Date Posted: {$row['date']}<br>";
            echo "Permission: {$row['permission']}<br><br><br>";
        }
    }
}
?>
