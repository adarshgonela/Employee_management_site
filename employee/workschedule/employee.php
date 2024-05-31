<?php
include('../redirect/conn.php');

function getWorkschedules(){
 global $conn;
        $sql = "SELECT * FROM workschedule";
    
    $result = mysqli_query($conn,$sql);

    $workschedules = [];

    while($row = mysqli_fetch_assoc($result)){
        $workschedules[] = $row;
    }

    return $workschedules;
}
?>
