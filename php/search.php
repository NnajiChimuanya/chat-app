<?php

include_once "./config.php";

session_start();
$outgoing_id = $_SESSION['id'];

$searchValue = $_POST['searchValue'];
$output = "";


$result = $conn->query("SELECT * FROM users WHERE NOT id = '$outgoing_id' AND (firstname LIKE '%$searchValue%' OR lastname LIKE '%$searchValue%') ");

if($result->num_rows > 0) {
   include_once "data.php";
    echo $output;
} else {
    $output = "User not found";
    echo $output;
}



?>