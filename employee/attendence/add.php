<?php
session_start();

$email = $_SESSION['email'];
$present = date('H:i');
$date = date('Y-m-d');
$difference = 1;

$sql = "SELECT * FROM attendance WHERE email='$email' and date='$date'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    $sql = "update attendance set lastLogin='$present',`minutes`=`minutes`+$difference WHERE id ='$id'";
    mysqli_query($conn, $sql);

    $log = ob_end_clean();

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');
    echo json_encode(["status" => "success", "message" => $log, 'query' => $sql]);

}
else{

    $insert_data = "INSERT INTO attendance ( `email`, `date` `firstLogin`) VALUES ('$email', '$date', '$present')";
    mysqli_query($conn, $insert_data);
   
    $log = ob_end_clean();

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');
    echo json_encode(["status" => "success", "message" => $log, 'query_i' => $insert_data]);



}
