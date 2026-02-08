<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ตอบกลับการร้องเรียน</title>
</head>

<body>
  <h1>ตอบกลับการร้องเรียน: <?php echo $complaint['complaint_id']; ?></h1>
  <p><a href="index.php?page=complaint_detail&id=<?php echo $complaint['complaint_id']; ?>">หน้ารายละเอียด</a></p>

  <p><b>ร้าน:</b> <?php echo $complaint['stall_name']; ?></p>
  <p><b>ประเภท:</b> <?php echo $complaint['category']; ?></p>
  <p><b>รายละเอียด:</b> <?php echo $complaint['details']; ?></p>

  <form method="POST" action="index.php?page=respond">
    <input type="hidden" name="complaint_id" value="<?php echo $complaint['complaint_id']; ?>">
    <p>ข้อความตอบกลับ:</p>
    <textarea name="response_message" rows="5" cols="50" required></textarea>
    <br><br>
    <button type="submit">ส่งการตอบกลับ</button>
  </form>
</body>

</html>