<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปข้อมูลใบสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-success">
                <div class="card-header bg-success text-white">
                    <h2 class="mb-0">✅ สรุปผลการรับสมัครงาน</h2>
                </div>
                <div class="card-body p-4">
                    
<?php
// ตรวจสอบว่ามีการส่งข้อมูลด้วยเมธอด POST หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. ดึงข้อมูลจากฟอร์ม โดยใช้ฟังก์ชัน htmlspecialchars() เพื่อป้องกัน Cross-Site Scripting (XSS)
    
    // ส่วนที่ 1: ตำแหน่งที่ต้องการสมัคร
    $position = htmlspecialchars($_POST['position'] ?? ' - ');

    // ส่วนที่ 2: ข้อมูลส่วนตัว
    $prefix = htmlspecialchars($_POST['prefix'] ?? ' - ');
    $firstName = htmlspecialchars($_POST['firstName'] ?? ' - ');
    $lastName = htmlspecialchars($_POST['lastName'] ?? ' - ');
    $birthDate = htmlspecialchars($_POST['birthDate'] ?? ' - ');
    $email = htmlspecialchars($_POST['email'] ?? ' - ');
    $phone = htmlspecialchars($_POST['phone'] ?? ' - ');

    // ส่วนที่ 3: ข้อมูลการศึกษา
    $educationLevel = htmlspecialchars($_POST['educationLevel'] ?? ' - ');
    $major = htmlspecialchars($_POST['major'] ?? ' - ');
    $university = htmlspecialchars($_POST['university'] ?? ' - ');

    // ส่วนที่ 4: ความสามารถพิเศษและประสบการณ์
    $specialSkills = htmlspecialchars($_POST['specialSkills'] ?? ' - ');
    $workExperience = htmlspecialchars($_POST['workExperience'] ?? ' - ');
    
    // 2. แสดงผลข้อมูลที่ได้รับในรูปแบบตารางหรือรายการที่อ่านง่าย

    echo "<h4 class='text-success mb-3'>ข้อมูลที่ท่านได้สมัครเข้ามา</h4>";
    
    echo "<ul class='list-group mb-4'>";
    echo "<li class='list-group-item d-flex justify-content-between align-items-center bg-light'>";
    echo "<strong>ตำแหน่งที่ต้องการสมัคร:</strong>";
    echo "<span class='badge bg-primary fs-6'>" . $position . "</span>";
    echo "</li>";
    echo "</ul>";

    echo "<h5 class='text-primary mt-4'>ข้อมูลส่วนตัว</h5>";
    echo "<table class='table table-bordered'>";
    echo "<tr><td class='fw-bold' style='width: 30%;'>คำนำหน้าชื่อ:</td><td>" . $prefix . "</td></tr>";
    echo "<tr><td class='fw-bold'>ชื่อ-สกุล:</td><td>" . $firstName . " " . $lastName . "</td></tr>";
    echo "<tr><td class='fw-bold'>วัน/เดือน/ปีเกิด:</td><td>" . $birthDate . "</td></tr>";
    echo "<tr><td class='fw-bold'>อีเมล:</td><td>" . $email . "</td></tr>";
    echo "<tr><td class='fw-bold'>เบอร์โทรศัพท์:</td><td>" . $phone . "</td></tr>";
    echo "</table>";
    
    echo "<h5 class='text-primary mt-4'>ข้อมูลการศึกษา</h5>";
    echo "<table class='table table-bordered'>";
    echo "<tr><td class='fw-bold' style='width: 30%;'>ระดับการศึกษาสูงสุด:</td><td>" . $educationLevel . "</td></tr>";
    echo "<tr><td class='fw-bold'>สาขาวิชา/วิชาเอก:</td><td>" . $major . "</td></tr>";
    echo "<tr><td class='fw-bold'>สถาบันการศึกษา:</td><td>" . $university . "</td></tr>";
    echo "</table>";
    
    echo "<h5 class='text-primary mt-4'>ทักษะและประสบการณ์</h5>";
    echo "<div class='card mb-3'><div class='card-header fw-bold bg-light'>ความสามารถพิเศษ / ทักษะเพิ่มเติม:</div><div class='card-body text-break'>" . nl2br($specialSkills) . "</div></div>";
    echo "<div class='card'><div class='card-header fw-bold bg-light'>ประสบการณ์ทำงาน (โดยสรุป):</div><div class='card-body text-break'>" . nl2br($workExperience) . "</div></div>";
    
    echo "<p class='mt-5 text-center text-muted'>ระบบได้รับข้อมูลการสมัครงานของท่านเรียบร้อยแล้ว</p>";

} else {
    // กรณีที่เข้าถึงไฟล์นี้โดยตรงโดยไม่ได้ส่งข้อมูลผ่านฟอร์ม
    echo "<div class='alert alert-danger' role='alert'>";
    echo "<strong>🚫 ข้อผิดพลาด:</strong> ไม่พบข้อมูลที่ส่งมาจากฟอร์มรับสมัครงาน";
    echo "</div>";
}
?>

                </div>
                <div class="card-footer text-center">
                    <a href="index.html" class="btn btn-outline-secondary">กลับไปยังหน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>