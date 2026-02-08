<?php
//แสดงการร้องเรียนทั้งหมด เรียงตามวันที่ร้องเรียน
include 'models/Complaint.php';

$complaints = getAllComplaints($connection);

include 'views/complaints_list.php';
?>