<?php

include_once "./config.php";


$searchValue = $_POST['searchValue'];
$output = "";


$result = $conn->query("SELECT * FROM users where firstname LIKE '%$searchValue%' OR lastname LIKE '%$searchValue%' ");

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $output .= "<a href='#'>
        <div class='content'>
            <img src='php/{$row['image']}' alt=''>
            <div class='details'>
                <span>" . $row['firstname']. ' '.  $row['lastname'] ."</span>
                <p>This a message</p>
            </div>
        </div>
        </a>";
    }
    

   
        echo $output;
} else {
    $output = "User not found";
    echo $output;
}



?>