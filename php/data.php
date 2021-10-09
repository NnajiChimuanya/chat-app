<?php
  while($row = $result->fetch_assoc()) {
    $output .= "<a href='chat.php?id={$row['id']}'>
    <div class='content'>
        <img src='php/{$row['image']}' alt=''>
        <div class='details'>
            <span>" . $row['firstname']. ' '.  $row['lastname'] ."</span>
            <p>This a message</p>
        </div>
    </div>
    </a>";
    
}



?>