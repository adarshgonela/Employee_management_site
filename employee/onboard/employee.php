<?php

function getonboards(){
 global $conn;
        $sql = "SELECT * FROM onboarding";
    
    $result = mysqli_query($conn,$sql);

    $onboards = [];

    while($row = mysqli_fetch_assoc($result)){
        $onboards[] = $row;
    }

    return $onboards;
}
?>
