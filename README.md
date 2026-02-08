# exit_exam_mvc_2568
<p>โครงสร้าง</p>
<code>
<pre>
exit_exam_2568/
├── index.php              <- ทำหน้าที่เป็น Router หลักเพื่อเชื่อมต่อ view ต่างๆ
├── database.php           <- เชื่อมต่อ DB
├── models/
│   ├── Complaint.php      <- 
│   ├── Response.php
│   └── Stall.php
├── controllers/
│   ├── ComplaintController.php
│   ├── ResponseController.php
│   └── StallController.php
└── views/
    ├── complaints_list.php   <- หน้ารวมร้องเรียนทั้งหมด
    ├── complaint_detail.php  <- หน้ารายละเอียดร้องเรียน
    ├── response_form.php     <- หน้าตอบกลับร้องเรียน
    └── stalls_list.php       <- หน้าร้านอาหาร+จำนวนร้องเรียน
</pre>
</code>
