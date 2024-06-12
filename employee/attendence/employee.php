<?php
//include "../conn.php";
// include "../redirect/conn.php";

// Assuming the dates are in 'Y-m-d' format
function generateDateRange($startDate, $endDate, $format = 'Y-m-d') {
    $dates = [];
    $current = strtotime($startDate);
    $end = strtotime($endDate);
    while ($current <= $end) {
        $dates[] = date($format, $current);
        $current = strtotime("+1 day", $current);
    }
    return $dates;
}
function getAttendance($filter=''){
    global $conn, $_SESSION;
    $email = $_SESSION['email'];
    
    if ($filter) {
        $sql = "SELECT * FROM attendance WHERE email = '$email' AND $filter ORDER BY `date` DESC LIMIT 30";
    } else {
        $sql = "SELECT * FROM attendance WHERE email = '$email' ORDER BY `date` DESC LIMIT 30";
    }
    $result = mysqli_query($conn, $sql);
    
    $attendance = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $attendance[] = $row;
    }
    if($attendance){
        $attendance[0]['lastLogin'] = "Not updated";
    }
    
    // Find the date range to cover
    
    // Default range if no attendance records are found
    $latestDate = date('Y-m-d');
    $earliestDate = date('Y-m-d', strtotime('-29 days'));
    
    // Generate full range of dates
    $allDates = generateDateRange($earliestDate, $latestDate);
    $allDates = array_reverse($allDates); // Ensure descending order
    
    // Merge attendance records with the full date range
    $attendanceWithGaps = [];
    $attendanceIndex = 0;
    
    foreach ($allDates as $date) {
        if ($attendanceIndex < count($attendance) && $attendance[$attendanceIndex]['date'] == $date) {
            $attendanceWithGaps[] = $attendance[$attendanceIndex];
            $attendanceIndex++;
        } else {
            $attendanceWithGaps[] = [
                'email' => $email,
                'date' => $date,
                'firstLogin' => 'Not Logged',
                'lastLogin' => ' Not Logged',
                'minutes' => '0',
                'status' => 'absent' // or any default value you want to set
            ];
        }
    }
    
    return $attendanceWithGaps;
    
}
