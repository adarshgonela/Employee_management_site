<?php
include('../redirect/conn.php');

function getAttendences(){
 global $conn;
        $sql = "SELECT * FROM attendence";
    
    $result = mysqli_query($conn,$sql);

    $attendences = [];

    while($row = mysqli_fetch_assoc($result)){
        $attendences[] = $row;
    }

    return $attendences;
}
?>