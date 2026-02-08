<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>รายละเอียดการร้องเรียน</title>
</head>

<body>
  <h1>รายละเอียดการร้องเรียน: <?php echo $complaint['complaint_id']; ?></h1>
  <p><a href="index.php?page=complaints">กลับหน้ารวม</a></p>

  <table border="1" cellpadding="5">
    <tr>
      <th>วันที่ร้องเรียน</th>
      <td><?php echo $complaint['complaint_date']; ?></td>
    </tr>
    <tr>
      <th>ร้านอาหาร</th>
      <td><?php echo $complaint['stall_name']; ?></td>
    </tr>
    <tr>
      <th>โรงอาหาร</th>
      <td><?php echo $complaint['canteen_name']; ?> (<?php echo $complaint['location']; ?>)</td>
    </tr>
    <tr>
      <th>ประเภท</th>
      <td><?php echo $complaint['category']; ?></td>
    </tr>
    <tr>
      <th>รายละเอียด</th>
      <td><?php echo $complaint['details']; ?></td>
    </tr>
    <tr>
      <th>สถานะ</th>
      <td><?php echo $complaint['status']; ?></td>
    </tr>
  </table>

  <h2>การตอบกลับ</h2>
  <?php if (mysqli_num_rows($responses) == 0) { ?>
    <p>ยังไม่มีการตอบกลับ</p>
  <?php } else { ?>
    <table border="1" cellpadding="5">
      <tr>
        <th>ลำดับ</th>
        <th>วันที่ตอบกลับ</th>
        <th>ข้อความ</th>
      </tr>
      <?php $i = 1;
      while ($r = mysqli_fetch_assoc($responses)) { ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $r['response_date']; ?></td>
          <td><?php echo $r['response_message']; ?></td>
        </tr>
        <?php $i++;
      } ?>
    </table>
  <?php } ?>

  <br>
  <a href="index.php?page=respond&complaint_id=<?php echo $complaint['complaint_id']; ?>">เพิ่มการตอบกลับ</a>
</body>

</html>