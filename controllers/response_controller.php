<?php
// ตอบกลับการร้องเรียน
include 'models/Complaint.php';
include 'models/Response.php';

// ถ้ากด submit form มา ให้บันทึกก่อน
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $complaint_id = $_POST['complaint_id'];
    $message = $_POST['response_message'];

    // บันทึก และ เปลี่ยนสถานะ
    addResponse($connection, $complaint_id, $message);
    updateComplaintStatus($connection, $complaint_id);

    // กลับไปหน้ารายละเอียดเมื่อร้องเรียนแล้ว
    header("Location: index.php?page=complaint_detail&id=$complaint_id");
    exit;
}

// แสดงฟอร์มตอบกลับ
$complaint_id = $_GET['complaint_id'];
$complaint = getComplaintById($connection, $complaint_id);

include 'views/response_form.php';
?>