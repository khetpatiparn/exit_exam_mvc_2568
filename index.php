<?php
require_once 'database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'stalls';

if ($page == 'complaints') {
    include 'controllers/complaint_controller.php';
} elseif ($page == 'complaint_detail') {
    include 'controllers/complaint_detail_controller.php';
} elseif ($page == 'respond') {
    include 'controllers/response_controller.php';
} elseif ($page == 'stalls') {
    include 'controllers/stall_controller.php';
} else {
    include 'controllers/stall_controller.php';
}

mysqli_close($connection);
?>