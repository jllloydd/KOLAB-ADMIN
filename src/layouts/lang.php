<?php
// include language configuration file based on selected language
$lng = "en";
if (isset($_GET['lang'])) {
   $lng = $_GET['lang'];
    $_SESSION['lang'] = $lng;
}
if( isset( $_SESSION['lang'] ) ) {
    $lng = $_SESSION['lang'];
}else {
    $lng = "en";
}
if ($in_concat === true) { 
    require_once ("./assets/lang/" . $lng . ".php");
} else {
    require_once ("../assets/lang/" . $lng . ".php");
}

?>