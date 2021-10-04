<?php

session_start();

include_once "./config.php";

$result = $conn->query("SELECT * FROM users");
$output = "";





if($result->num_rows == 1) {
    $output .= "No user available";
} else if($result->num_rows > 0) {
   include_once "data.php";
    echo $output;
}


?>