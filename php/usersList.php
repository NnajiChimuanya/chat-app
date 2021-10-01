<?php

session_start();

include_once "./config.php";

//$result = $conn->query("SELECT * FROM users");
$output = "mehn";
echo $ouput;




// if($result->num_rows == 1) {
//     $output .= "No user available";
// } else if($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         $output .= "<a href='#'>
//         <div class='content'>
//             <img src='./'". $row['image']." alt=''>
//             <div class='details'>
//                 <span>" . $row['firstname']. ' '.  $row['lastname'] ."</span>
//                 <p>This a message</p>
//             </div>
//         </div>
//         </a>";
//     }
// }


?>