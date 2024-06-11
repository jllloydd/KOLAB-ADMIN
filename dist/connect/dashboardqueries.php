<?php
$all = "SELECT * FROM bookings";

if ($result = mysqli_query($conn, $all)) {

    // Return the number of rows in result set
    $allcount = mysqli_num_rows( $result );

 }

 $pending = "SELECT * FROM bookings WHERE status = 'Pending'";

 if ($result = mysqli_query($conn, $pending)) {

    // Return the number of rows in result set
    $pendingcount = mysqli_num_rows( $result );

 } 

 $approved = "SELECT * FROM bookings WHERE status = 'Approved'";

 if ($result = mysqli_query($conn, $approved)) {

    // Return the number of rows in result set
    $currentcount = mysqli_num_rows( $result );

 }

 $cancelled = "SELECT * FROM bookings WHERE status = 'Cancelled'";

 if ($result = mysqli_query($conn, $cancelled)) {

    // Return the number of rows in result set
    $cancelledcount = mysqli_num_rows( $result );

 }

 $conn -> close();
?>