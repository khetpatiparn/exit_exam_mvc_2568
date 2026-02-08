<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>ร้านอาหาร</title></head>
<body>
<h1>ร้านอาหารทั้งหมด</h1>
<p><a href="index.php?page=complaints">หน้ารวมร้องเรียน</a></p>

<table border="1" cellpadding="5">
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อร้าน</th>
        <th>โรงอาหาร</th>
        <th>ตำแหน่งที่ตั้ง</th>
        <th>จำนวนร้องเรียน</th>
    </tr>
    <?php $i = 1; while ($s = mysqli_fetch_assoc($stalls)) { ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $s['stall_name']; ?></td>
        <td><?php echo $s['canteen_name']; ?></td>
        <td><?php echo $s['location']; ?></td>
        <td><?php echo $s['complaint_count']; ?></td>
    </tr>
    <?php $i++; } ?>
</table>
</body>
</html>
