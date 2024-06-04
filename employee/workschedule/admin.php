<?php
include('../../Admin/conn.php');
include_once('../../Admin/frontendpages/workschedule.php');
global $conn;




if (isset($_POST['workschedule'])) {

    $workassign = $_REQUEST['workassign'];
    $givenhours = $_REQUEST['givenhours'];
    $takenhours = $_REQUEST['takenhours'];
    $status = $_REQUEST['status'];
    $user_id = $_REQUEST['user_id'];

    $sql = "INSERT INTO workschedule (workassign, givenhours, takenhours, status, user_id) VALUES ('$workassign', '$givenhours', '$takenhours', '$status', '$user_id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        return true;
    } else {
        return false;
    }
}
