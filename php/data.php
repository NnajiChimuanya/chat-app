<?php




while($row = $result->fetch_assoc()) {

    $incoming_id = $row['id'];

    $query2 = "SELECT * FROM message WHERE (outgoing_id = {$outgoing_id}) AND (incoming_id = {$incoming_id}) OR (outgoing_id = {$incoming_id}) AND (incoming_id = {$outgoing_id}) ORDER BY msg_id  DESC LIMIT 1";
    $result2 = $conn->query($query2);
    
    $msg = "";

    if($result2->num_rows > 0){
        $row2 = $result2->fetch_assoc();
        

        if($row2['outgoing_id'] == $outgoing_id) {
            $msg .= "You : " . $row2['message'];
        } else {
            $msg .= $row2['message'];
        }

    } else {
        $msg = "No message available";
    }
    

    $output .= "<a href='chat.php?id={$row['id']}'>
    <div class='content'>
        <img src='php/{$row['image']}' alt=''>
        <div class='details'>
            <span>" . $row['firstname']. ' '.  $row['lastname'] ."</span>
            <p>{$msg}</p>
        </div>
    </div>
    </a>";
    
}



?>