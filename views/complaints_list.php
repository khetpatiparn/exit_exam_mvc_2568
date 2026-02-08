<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>รายการร้องเรียนทั้งหมด</title>
</head>

<body>
  <h1>รายการร้องเรียนทั้งหมด</h1>
  <p><a href="index.php?page=stalls">หน้าร้านอาหาร</a></p>

  <table border="1" cellpadding="5">
    <tr>
      <th>ลำดับ </th>
      <th>วันที่ร้องเรียน</th>
      <th>ร้านอาหาร</th>
      <th>โรงอาหาร</th>
      <th>ประเภท</th>
      <th>รายละเอียด</th>
      <th>สถานะ</th>
      <th></th>
    </tr>

    <?php $i = 1;
    while ($c = mysqli_fetch_assoc($complaints)) { ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $c['complaint_date']; ?></td>
        <td><?php echo $c['stall_name']; ?></td>
        <td><?php echo $c['canteen_name']; ?></td>
        <td><?php echo $c['category']; ?></td>
        <td><?php echo $c['details']; ?></td>
        <td><?php echo $c['status']; ?></td>
        <td><a href="index.php?page=complaint_detail&id=<?php echo $c['complaint_id']; ?>">ดูรายละเอียด</a></td>
      </tr>
      <?php $i++;
    } ?>

  </table>
</body>

</html>