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

           <form action="./php/signup.php" method="POST">
                <div class="error-text">
                    <p>Blaah blaaah baah error-text</p>
                </div>

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
                    <input type="passwordConfirm" name="passwordConfirm">
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

            <div class="Already"> Already have an account? <a href="./login.php">Login</a> </div>
       </section>
    </div>

  
    
</body>
</html>