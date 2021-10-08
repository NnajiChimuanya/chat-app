<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <script src="https://use.fontawesome.com/28b931adaa.js"></script>
    <title>Chat-App</title>
</head>
<body>
    <div class="wrapper">
       <section class="sign-up">
           

            <header>Chat-App Signup</header>

<<<<<<< HEAD
           <form action="./php/signup.php" method="POST" enctype="multipart/form-data">
                <!-- <div class="error-text">
                    <p>Blaah blaaah baah error-text</p>
                </div> -->

                <?php
                    if(isset($_GET["error"])) {
                       echo "<div class='error-text'><p>". $_GET["error"] . "</p></div>";
                    }


                ?>

=======
           <form action="" method="" enctype="multipart/form-data">
                <div class="error-text">
                   
                </div>

               
>>>>>>> 9719a5f... implemented Ajax for the signup
               <div class="field name-details">
                    <div class="field write">
                        <label for="firstName"> First Name </label>
                        <input type="text" name="firstName" placeholder="John">
                    </div>

                    <div class="field write">
                            <label for="lastName"> Last Name </label>
                            <input type="text" name="lastName" placeholder="Doe">
                    </div>
               </div>

                <div class="field write">
                    <label for="email"> Email </label>
                    <input type="email" name="email" placeholder="johndoe@mail.com">
                </div>

                <div class="field write">
                    <label for="password"> Password </label>
                    <input type="password" name="password">
                </div>

                <div class="field write">
                    <label for="passwordConfirm"> Confirm Password </label>
<<<<<<< HEAD
                    <input type="passwordConfirm" name="passwordConfirm">
=======
                    <input type="password" name="passwordConfirm">
>>>>>>> 9719a5f... implemented Ajax for the signup
                </div>

                <div class="field image">
                    <label for="passwordConfirm"> Select Image </label>
                    <input type="file" name="image">
                </div>


                <div class="field button">
                    
                    <input type="submit" name="submit">
                </div>

            </form>

            <hr>

            <div class="Already"> Already have an account? <a href="./index.php">Login</a> </div>
       </section>
    </div>

  
<<<<<<< HEAD
    
=======
    <script src="./javascript/signup.js"></script>
>>>>>>> 9719a5f... implemented Ajax for the signup
</body>
</html>