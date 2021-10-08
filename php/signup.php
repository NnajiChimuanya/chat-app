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

    
<<<<<<< HEAD
    


    if(isset($_POST["submit"])) {
        if($conn) {
            echo $firstname;
            echo $lastname;
            echo $email . "<br>";
           
            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
                $result = $conn->query("SELECT * FROM users where email = '$email'");
                if($result->num_rows > 0 ) {
                    header("Location: ../signup.php?error=email+already+exists");
                    exit();
                } else {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                        header("Location: ../signup.php?error=invalid+email+format");
                        exit();
=======
    $output = "";
    


    
        if($conn) {
          
           
            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($_FILES['image']) ) {
                $result = $conn->query("SELECT * FROM users where email = '$email'");
                if($result->num_rows > 0 ) {
                  
                    $output = "Email already exists";
                    echo $output;
                } else {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                        $output = "Invalid Email format";
                        echo $output;
>>>>>>> 9719a5f... implemented Ajax for the signup
                    } else {
                        if($password === $passwordConfirm) {
                            $password = password_hash($password, PASSWORD_DEFAULT);
                           

                            $available_ext = array("jpeg", "jpg", "png");

                           $name_array = explode(".", $name);
                           $ext = end($name_array);
                           

                           if($ext === "jpeg" || $ext === "jpg" || $ext === "png") {
                              
                               $time = time();

                               $location = "images/".$time.$firstname.$lastname.$name;
                               

                               if(move_uploaded_file($temp, $location)) {
                                   $status = "Online";
                                   
                                   $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, image, status) VALUES (?,?,?,?,?,?)");
                                   $stmt->bind_param("ssssss", $firstname, $lastname, $email, $password, $location, $status);

                                   if($stmt->execute()){
                                       

                                       $result = $conn->query("SELECT * FROM users WHERE email = '$email'");

                                       if($result->num_rows > 0) {
                                           $row = $result->fetch_assoc();

                                           $id = $row["id"];
                                          
<<<<<<< HEAD
=======
                                           $output = "success";
                                           echo $output;
>>>>>>> 9719a5f... implemented Ajax for the signup
                                       }
                                       
                                   }
                                
                                } else {
<<<<<<< HEAD
                                    header("Location: ../signup.php?error=unexpected+error+occured");
                                    exit();
                               }

                           } else {
                            header("Location: ../signup.php?error=upload+valid+image+format(jpeg,jpg,png)");
                            exit();
                           }
                            
                        } else {
                            header("Location: ../signup.php?error=password+don't+match");
                            exit();
=======
                                    $output = "Unexpected error occurred";
                                    echo $output;
                               }

                           } else {
                            $output = "Upload valid image format (jpg, jpeg or png)";
                            echo $output;
                           }
                            
                        } else {
                            $output = "Passwords dont match";
                            echo $output;
>>>>>>> 9719a5f... implemented Ajax for the signup
                        }
                    }
                }
            } else {
<<<<<<< HEAD
                header("Location: ../signup.php?error=input+required+fields");
                exit();
=======
                $output = "All fields are required";
                echo $output;
>>>>>>> 9719a5f... implemented Ajax for the signup
            }

        } else {
            echo $conn->error_reporting();
        }
<<<<<<< HEAD
    }
=======
    
>>>>>>> 9719a5f... implemented Ajax for the signup
    
    
    ?>


