<?php 
require_once('env.php');

$conn = mysqli_connect(DEV_HOST, DEV_USER, DEV_PASSWORD);

if (!$conn) {
    error_log("Connection failed: " . mysqli_connect_error());
    return;
}

if (!mysqli_select_db($conn, DEV_NAME)) {
    error_log("Database selection failed: " . mysqli_error($conn));
    return;
}
?>