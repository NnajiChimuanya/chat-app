<?php 
    include_once "./config.php";

    if(isset($_POST["submit"])) {
        if($conn) {
            echo "connected successfully";
        } else {
            echo $conn->error_log();
        }
    }
    
    
    ?>


