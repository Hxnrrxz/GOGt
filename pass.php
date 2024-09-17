<?php
session_start();

// กำหนดรหัสผ่านที่ถูกต้อง
$correct_password = 'your_secure_password';

// ตรวจสอบว่ามีการส่งข้อมูลรหัสผ่านหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['password'])) {
        $entered_password = $_POST['password'];

        // ตรวจสอบรหัสผ่าน
        if ($entered_password === $correct_password) {
            // รหัสผ่านถูกต้อง
            header('Location: secret_page.php'); // เปลี่ยนเส้นทางไปยังหน้าลับ
            exit();
        } else {
            // รหัสผ่านไม่ถูกต้อง
            header('Location: login.html?error=1'); // ส่งกลับไปที่หน้าเข้าสู่ระบบพร้อมกับข้อผิดพลาด
            exit();
        }
    }
}
