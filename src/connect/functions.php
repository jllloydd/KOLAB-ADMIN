<?php
function term_rate($target) {
    switch ($target) {
        case "0";$target = "Hourly (P75)";break;
        case "1";$target = "Daily (P249)";break;
        case "2";$target = "Weekly (P995)";break;
        case "3";$target = "Monthly (P3600)";break;
    }
    return $target;
}
function payment_method($target) {
    switch ($target) {
        case "0";$target = "Online";break;
        case "1";$target = "Onsite";break;
    }
    return $target;
}
?>