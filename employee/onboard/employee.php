<?php

function getonboards(){
 global $conn;
        $sql = "SELECT * FROM onboard";
    
    $result = mysqli_query($conn,$sql);

    $onboards = [];

    while($row = mysqli_fetch_assoc($result)){
        $onboards[] = $row;
    }

    return $onboards;
}
?>
