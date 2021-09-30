<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: ./index.php");
        exit();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css" rel="stylesheet">
    
    <title>Chat-App</title>
</head>
<body>
    <div class="wrapper">
       <section class=" user">
           <div class="header">
                <div class="content">
                    <img src="./php/<?php echo $_SESSION['image']?>" alt="">
                    <div class="details">
                        <span> <?php  echo $_SESSION['firstname'].' '. $_SESSION['lastname']  ?>  </span>
                        <p><?php  echo $_SESSION['status'] ?></p>
                    </div>
                </div>
                <a class="logout" href="./php/logout.php">Logout</a>
            </div>

            <div class="search">
                <span class="text">Select a user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
            </div>

            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Nnaji Chimuanya</span>
                            <p>This a message</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Nnaji Chimuanya</span>
                            <p>This a message</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Nnaji Chimuanya</span>
                            <p>This a message</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Nnaji Chimuanya</span>
                            <p>This a message</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Nnaji Chimuanya</span>
                            <p>This a message</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Nnaji Chimuanya</span>
                            <p>This a message</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>




            
    </div>
    


    
       
 
</body>
</html>