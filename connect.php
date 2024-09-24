<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_projct";

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli($hostname, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// การตั้งค่าการเชื่อมต่อฐานข้อมูลสำเร็จ
?>
