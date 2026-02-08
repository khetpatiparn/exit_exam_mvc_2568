<?php
//แสดงร้านอาหารและจํานวนการร้องเรียนของแต่ละร้าน
include 'models/Stall.php';

$stalls = getAllStalls($connection);

include 'views/stalls_list.php';
?>
