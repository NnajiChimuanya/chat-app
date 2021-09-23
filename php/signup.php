<?php 
    include_once "./config.php";

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $name = $_FILES["image"]["name"];
    $type = $_FILES["image"]["type"];
    $temp = $_FILES["image"]["tmp_name"];

    
    


    if(isset($_POST["submit"])) {
        if($conn) {
            echo $firstname;
            echo $lastname;
            echo $email . "<br>";
           
            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
                echo "all good";
            } else {
                echo "input required fields";
            }

        } else {
            echo $conn->error_reporting();
        }
    }
    
    
    ?>


