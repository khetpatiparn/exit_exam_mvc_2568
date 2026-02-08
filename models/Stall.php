<?php
// ดึงร้านอาหารทั้งหมด พร้อมนับจำนวนร้องเรียน
function getAllStalls($connection) {
    $sql = "SELECT s.*, ca.canteen_name, ca.location, COUNT(c.complaint_id) as complaint_count 
            FROM stalls s 
            JOIN canteens ca ON s.canteen_id = ca.canteen_id 
            LEFT JOIN complaints c ON s.stall_id = c.stall_id 
            GROUP BY s.stall_id 
            ORDER BY ca.canteen_name, s.stall_name";
    $result = mysqli_query($connection, $sql);
    return $result;
}
?>
