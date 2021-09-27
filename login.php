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
           

            <header>Chat-App Signup</header>

           <form action="./php/login.php" method="POST">
               <?php
                    if(isset($_GET["error"])) {
                        echo "<div class='error-text'><p>". $_GET["error"] . "</p></div>";
                     }

                ?>

                <div class="field write">
                    <label for="email"> Email </label>
                    <input type="email" name="email" placeholder="johndoe@mail.com">
                </div>

                <div class="field write">
                    <label for="password"> Password </label>
                    <input type="password" name="password">
                </div>


                <div class="field button">
                    
                    <input type="submit" name="submit" placeholder="Login">
                </div>

            </form>

            <hr>

            <div class="Already"> Don't have an account? <a href="./index.php"> Signup</a> </div>
       </section>
    </div>
    
</body>
</html>