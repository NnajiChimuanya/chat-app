<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ./index.php");
    exit();
}

$outgoing_id = $_POST['outgoing_id'];
$incoming_id = $_POST['incoming_id'];
$message = $_POST['message'];

include_once "./config.php";
$output = "";
$stmt = $conn->prepare("INSERT INTO message (outgoing_id, incoming_id, message) VALUE (?,?,?)");
$stmt->bind_param("iis", $outgoing_id, $incoming_id, $message);

if($stmt->execute()){
    $output .= "success";
    echo $output;
} else {
    $output .= "error";
    $output;
}
?>