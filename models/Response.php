<?php
// ดึงการตอบกลับทั้งหมดของร้องเรียน 1 รายการ
function getResponsesByComplaintId($connection, $complaint_id) {
    $sql = "SELECT * FROM responses WHERE complaint_id = $complaint_id ORDER BY response_date DESC";
    $result = mysqli_query($connection, $sql);
    return $result;
}

// เพิ่มการตอบกลับใหม่
function addResponse($connection, $complaint_id, $message) {
    $today = date('Y-m-d');
    $sql = "INSERT INTO responses (complaint_id, response_date, response_message) 
            VALUES ($complaint_id, '$today', '$message')";
    mysqli_query($connection, $sql);
}
?>
