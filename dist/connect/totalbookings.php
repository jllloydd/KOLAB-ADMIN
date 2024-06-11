<?php
$sql = "SELECT * FROM bookings";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );

 }

 $pending = "SELECT * FROM bookings WHERE status = 'Pending'";

 if ($result = mysqli_query($conn, $pending)) {

    // Return the number of rows in result set
    $pendingcount = mysqli_num_rows( $result );

 }
?>