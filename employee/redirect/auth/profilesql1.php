<?php session_start();
 include('../redirect/conn.php');

function getprofiles(){
 global $conn;
        $sql = "SELECT * FROM profile";
    
    $result = mysqli_query($conn,$sql);

    $profiles = [];

    while($row = mysqli_fetch_assoc($result)){
        $profiles[] = $row;
    }

    return $profiles;
}
?>
