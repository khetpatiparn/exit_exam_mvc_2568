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

## System Requirements
* **XAMPP** (PHP + MySQL)

## Installation & Setup Guide

### 1. Database Setup
1. เปิด **XAMPP Control Panel** และ Start **Apache** และ **MySQL**
2. เข้าไปที่ **phpMyAdmin** (http://localhost/phpmyadmin)
3. สร้าง Database ใหม่ชื่อ **`mvc_db`** (หรือชื่อที่ต้องการ)
4. ไปที่ Tab **Import** และเลือกไฟล์ **`mvc_db.sql`** เพื่อสร้างตารางและข้อมูลจำลอง

### 2. Project Setup
1. นำโฟลเดอร์โปรเจกต์ไปวางไว้ที่ `C:\xampp\htdocs\`
   (เช่น `C:\xampp\htdocs\exit_exam_mvc_2568`)
2. ตรวจสอบการตั้งค่าฐานข้อมูลที่ไฟล์ `database.php`
   ```php
   $host = "localhost";
   $username = "root";
   $password = ""; 
   $db_name = "mvc_db";
