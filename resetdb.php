<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "assign1");

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit(1);
} else {
    //echo "Connection successful...  ";
}

?>
