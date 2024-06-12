<?php
include('../../Admin/conn.php');
include_once('../../Admin/frontendpages/meeting.php');
global $conn;




if (isset($_POST['meetings'])) {

    $id = $_REQUEST['user_id'];
    $time = $_REQUEST['Meeting_Time'];
    $date = $_REQUEST['Meeting_Date'];
    $topic = $_REQUEST['Topic'];
    

    $sql = "INSERT INTO meetings (user_id, Meeting_Time, Meeting_Date, Topic) VALUES ('$id', '$time', '$date', '$topic')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        return true;
    } else {
        return false;
    }
}
