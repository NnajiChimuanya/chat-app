<?php 
    include_once "./config.php";

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    $name = $_FILES["image"]["name"];
    $type = $_FILES["image"]["type"];
    $temp = $_FILES["image"]["tmp_name"];

    
    


    if(isset($_POST["submit"])) {
        if($conn) {
            echo $firstname;
            echo $lastname;
            echo $email . "<br>";
           
            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
                $result = $conn->query("SELECT * FROM users where email = '$email'");
                if($result->num_rows > 0 ) {
                    echo "Email already exists";
                } else {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                        "invalid email"; 
                    } else {
                        if($password === $passwordConfirm) {
                            $password = password_hash($password, PASSWORD_DEFAULT);
                           
                            
                        } else {
                            echo "Passwords dont match";
                        }
                    }
                }
            } else {
                echo "input required fields";
            }

        } else {
            echo $conn->error_reporting();
        }
    }
    
    
    ?>


