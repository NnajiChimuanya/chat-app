<?php
 session_start();
 if(!isset($_SESSION['id'])){
     header("Location: ./index.php");
     exit();
 }
 
 $outgoing_id = $_POST['outgoing_id'];
 $incoming_id = $_POST['incoming_id'];

$output = "";

include_once "./config.php";

$result = $conn->query("SELECT * FROM message LEFT JOIN users on users.id = message.incoming_id WHERE (outgoing_id = {$outgoing_id}) AND (incoming_id = {$incoming_id}) OR (outgoing_id = {$incoming_id}) AND (incoming_id = {$outgoing_id}) ORDER BY msg_id  ASC");

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if($outgoing_id == $row['outgoing_id']){
            $output .= "<div class='chat chat chat-outgoing'>
                        <div class='details'>
                            <p> {$row['message']}</p> 
                        </div>
                        </div>";
        } else {
            $output .=  "<div class='chat chat chat-incoming'>
                        <img src='./php/{$row['image']}' alt=''>
                        <div class='details'>
                            <p> {$row['message']}</p>
                        </div>
                        </div>";
        } 
        
    }
    echo $output;
}


?>