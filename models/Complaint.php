<?php
// ดึงร้องเรียนทั้งหมดตามวันที่
function getAllComplaints($connection)
{
  $sql = "SELECT c.*, s.stall_name, ca.canteen_name, ca.location 
            FROM complaints c 
            JOIN stalls s ON c.stall_id = s.stall_id 
            JOIN canteens ca ON s.canteen_id = ca.canteen_id 
            ORDER BY c.complaint_date DESC";
  $result = mysqli_query($connection, $sql);
  return $result;
}

// ดึงร้องเรียน 1 อันด้วย id
function getComplaintById($connection, $id)
{
  $sql = "SELECT c.*, s.stall_name, ca.canteen_name, ca.location 
            FROM complaints c 
            JOIN stalls s ON c.stall_id = s.stall_id 
            JOIN canteens ca ON s.canteen_id = ca.canteen_id 
            WHERE c.complaint_id = $id";
  $result = mysqli_query($connection, $sql);
  return mysqli_fetch_assoc($result);
}

// เปลี่ยนสถานะเป็นดำเนินการแล้ว
function updateComplaintStatus($connection, $id)
{
  $sql = "UPDATE complaints SET status = 'ดำเนินการแล้ว' WHERE complaint_id = $id";
  mysqli_query($connection, $sql);
}
?>