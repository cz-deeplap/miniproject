<?php
// เชื่อมต่อกับฐานข้อมูล
$host = 'localhost';
$db = 'db_projct';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่าได้ส่ง ID มาหรือไม่
if (isset($_GET['del'])) {
    $id = intval($_GET['del']); // Sanitize input

    // คำสั่งลบข้อมูล
    $sql = "DELETE FROM tblproducts WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // หากลบสำเร็จ
        echo "<script>alert('Record Deleted Successfully!');</script>";
        echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
    } else {
        // หากลบไม่สำเร็จ
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
        echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
    }
} else {
    echo "<script>alert('No ID provided.');</script>";
    echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
