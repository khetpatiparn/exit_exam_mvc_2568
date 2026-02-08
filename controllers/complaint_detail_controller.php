<?php
// แสดงรายละเอียดการร้องเรียน และสถานะปัจจุบัน
// ดึงร้องเรียน 1 อัน ,การตอบกลับ
include 'models/Complaint.php';
include 'models/Response.php';

$id = $_GET['id'];
$complaint = getComplaintById($connection, $id);
$responses = getResponsesByComplaintId($connection, $id);

include 'views/complaint_detail.php';
?>