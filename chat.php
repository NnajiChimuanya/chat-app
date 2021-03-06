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
    <!-- <script src="https://use.fontawesome.com/28b931adaa.js"></script> -->
    <link href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    
    <title>Chat-App</title>
</head>
<body>
    <div class="wrapper">
       <section class=" chat-area">
            <?php
                $id = $_GET['id'];

                include_once "./php/config.php";

                $result = $conn->query("SELECT * from users WHERE id = '$id'");
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                }

            ?>


           <div class="header">
                <a href="./usersList.php" class="back-icon" ><--</a>
                <div class="content">
                    <img src="php/<?php  echo $row['image'];  ?>" alt="">
                    <div class="details">
                        <span><?php  echo $row['firstname']." ".$row['lastname'];   ?></span>
                        <p><?php  echo $row['status']; ?></p>
                    </div>
                </div>
               
            </div>

            <div class="chat-box">
                <!-- <div class="chat chat chat-outgoing">
                    <div class="details">
                        <p> Lorm ipsum blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah blaaaaaaaah</p>
                    </div>
                </div>

                <div class="chat chat chat-incoming">
                    <img src="img2.jpg" alt="">
                    <div class="details">
                        <p> Lorm ipsum blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah blaaaaaaaah</p>
                    </div>
                </div>

                <div class="chat chat chat-outgoing">
                    <div class="details">
                        <p> Lorm ipsum blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah blaaaaaaaah</p>
                    </div>
                </div>

                <div class="chat chat chat-incoming">
                    <img src="img2.jpg" alt="">
                    <div class="details">
                        <p> Lorm ipsum blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah blaaaaaaaah</p>
                    </div>
                </div>

                <div class="chat chat chat-outgoing">
                    <div class="details">
                        <p> Lorm ipsum blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah blaaaaaaaah</p>
                    </div>
                </div>

                <div class="chat chat chat-incoming">
                    <img src="img2.jpg" alt="">
                    <div class="details">
                        <p> Lorm ipsum blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah blaaaaaaaah</p>
                    </div>
                </div> -->
            </div>


            <form action="#" class="typing-area" autocomplete="off" >
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['id']; ?> " hidden>
                <input type="text" name="incoming_id" value="<?php echo $id; ?> " hidden> 
                <input type="text" class="message" name="message" placeholder="Type a message here...">
                <button><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                    </svg>
                </button>
            </form>
        
        </section>




            
    </div>
    

    <script src="./javascript/chat.js"></script>
</body>
</html>