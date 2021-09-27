<?php
if(isset($_POST["submit"])) {
  
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($email) && !empty($password)) {
        

        include_once "./config.php";

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

                header("Location: ../usersList.php");

            } else {
                header("Location: ../login.php?error=incorrect+password");
                exit();
            }
        } else {
            header("Location: ../login.php?error=email+does+not+exist");
            exit();
        }


    }else {
        header("Location: ../login.php?error=email+and+password+required!!");
        exit();
    }
    
}


?>