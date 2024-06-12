<?php
include('../redirect/conn.php');

function getmeetings(){
 global $conn;
        $sql = "SELECT * FROM meetings";
    
    $result = mysqli_query($conn,$sql);

    $meetings = [];

    while($row = mysqli_fetch_assoc($result)){
        $meetings[] = $row;
    }

    return $meetings;
}
?>
