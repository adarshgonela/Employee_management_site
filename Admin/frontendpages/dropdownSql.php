<?php
include_once('../../employee/redirect/conn.php');
function getIDs(){
 global $conn;
        $sql = "SELECT * FROM users ";
    
    $result = mysqli_query($conn,$sql);

    $ids = [];

    while($row = mysqli_fetch_assoc($result)){
        $ids[] = $row;
    }

    return $ids;
}
?>