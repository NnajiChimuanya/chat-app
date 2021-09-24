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
                           

                            $available_ext = array("jpeg", "jpg", "png");

                           $name_array = explode(".", $name);
                           $ext = end($name_array);
                           echo $ext;

                           if(in_array($ext, $name_array)) {
                               echo "okay";

                               $time = time();

                               $location = "./images/".$time.$firstname.$lastname.$name;
                               

                               if(move_uploaded_file($temp, $location)) {
                                   $status = "Online";
                                   
                                   $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, image, status) VALUES (?,?,?,?,?,?)");
                                   $stmt->bind_param("ssssss", $firstname, $lastname, $email, $password, $location, $status);

                                   if($stmt->execute()){
                                       echo "new account created";

                                       $result = $conn->query("SELECT * FROM users WHERE email = '$email'");

                                       if($result->num_rows > 0) {
                                           $row = $result->fetch_assoc();

                                           $id = $row["id"];
                                           echo $id;
                                       }
                                       
                                   }
                                
                                } else {
                                   echo  "error in uploading image";
                               }

                           } else {
                               echo "Select a valid image format";
                           }
                            
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


