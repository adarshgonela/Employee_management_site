<?php
include('../../Admin/conn.php');
include_once('../frontendpages/onboarding.php');
global $conn;

    
if (isset($_POST['onboard'])) {

    $name = $_REQUEST['name'];
    $startdate = $_REQUEST['startdate'];
    $status = $_REQUEST['status'];
    $onboardingtemplate = $_REQUEST['onboardingtemplate'];
    $user_id = $_REQUEST['user_id'];

    $sql = "INSERT INTO onboarding (name, startdate, status, onboardingtemplate, user_id) VALUES ('$name', '$startdate',  '$status', '$onboardingtemplate', '$user_id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        return true;
    } else {
        return false;
    }
}
