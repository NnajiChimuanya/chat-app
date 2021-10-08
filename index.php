<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <title>Chat-App</title>
</head>
<body>
    <div class="wrapper">
       <section class="sign-up">
           

<<<<<<< HEAD
            <header>Chat-App Signup</header>

           <form action="./php/login.php" method="POST">
               <?php
                    if(isset($_GET["error"])) {
                        echo "<div class='error-text'><p>". $_GET["error"] . "</p></div>";
                     }

                ?>
=======
            <header>Chat-App </header>

           <form action="" method="" >
               
                     <!-- if(isset($_GET["error"])) {
                         echo "<div class='error-text'><p>". $_GET["error"] . "</p></div>";
                      } -->

              
>>>>>>> 9719a5f... implemented Ajax for the signup

                <div class ='error-text loginerrortext' id="error">
                     <p>
                         
                     </p>
                </div>

                <div class="field write">
                    <label for="email"> Email </label>
                    <input type="email" name="email" placeholder="johndoe@mail.com">
                </div>

                <div class="field write">
                    <label for="password"> Password </label>
                    <input type="password" name="password">
                </div>


                <div class="field button">
                    
                    <input  type="submit" name="submit" placeholder="Login">
                </div>

            </form>

            <hr>

            <div class="Already"> Don't have an account? <a href="./signup.php"> Signup</a> </div>
       </section>
    </div>


    
<<<<<<< HEAD
    
=======
    <script src="./javascript/login.js"></script>
>>>>>>> 9719a5f... implemented Ajax for the signup
</body>
</html>