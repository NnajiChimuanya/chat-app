<?php

$output = "";


$email = $_POST["email"];
$password = $_POST["password"];

if(!empty($email) && !empty($password)) {
    include_once "./config.php";

    if(!$conn) {
        $output = "Error connecting to database";
        echo $output;
    }

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if(password_verify($password, $row["password"])){
            session_start();
            $_SESSION['id'] = $row["id"];
            $_SESSION['firstname'] = $row["firstname"];
            $_SESSION['lastname'] = $row["lastname"];
            $_SESSION['image'] = $row["image"];
            $_SESSION['status'] = $row["status"];

            $output = "success";
            echo $output;

        } else {
            $output = "incorrect password";
            echo $output;
        }
    } else {
        $output = "Email does not exist";
        echo $output;
    }
       
        
} else {
$output = "Email and password required";
echo $output;
}

   




?>