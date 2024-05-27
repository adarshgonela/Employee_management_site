<?php
include('../redirect/conn.php');

function getAttendences(){
 global $conn;
        $sql = "SELECT * FROM attendence";
    
    $result = mysqli_query($conn,$sql);

<<<<<<< HEAD
?>

=======
    $attendences = [];

    while($row = mysqli_fetch_assoc($result)){
        $attendences[] = $row;
    }

    return $attendences;
}
?>
>>>>>>> ba0f91b38d5a98fdb48bc03352e9483445eaf3f6
