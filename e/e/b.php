<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>ฟอร์มใบสมัครงาน - บริษัท เทคโนโลยีล้ำยุค จำกัด</title>
</head>
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">✨ ใบสมัครงาน (Job Application Form)</h2>
                </div>
                <div class="card-body p-4 p-md-5">
                    <form action="" method="post">

                        <h4 class="text-primary mb-4 border-bottom pb-2">1. ตำแหน่งที่ต้องการสมัคร</h4>
                        <div class="mb-3">
                            <label for="position" class="form-label fw-bold">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                            <select class="form-select" id="position" name="position" required>
                                <option value="" disabled selected>--- กรุณาเลือกตำแหน่งที่สนใจ ---</option>
                                <option value="Software Engineer">Software Engineer (วิศวกรซอฟต์แวร์)</option>
                                <option value="Data Analyst">Data Analyst (นักวิเคราะห์ข้อมูล)</option>
                                <option value="Marketing Specialist">Marketing Specialist (ผู้เชี่ยวชาญด้านการตลาด)</option>
                                <option value="HR Officer">HR Officer (เจ้าหน้าที่บุคคล)</option>
                                <option value="Graphic Designer">Graphic Designer (นักออกแบบกราฟิก)</option>
                            </select>
                            <div class="form-text">กรุณาเลือกเพียง 1 ตำแหน่งที่ท่านต้องการสมัคร</div>
                        </div>

                        <h4 class="text-primary mt-5 mb-4 border-bottom pb-2">2. ข้อมูลส่วนตัว</h4>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="prefix" class="form-label fw-bold">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                                <select class="form-select" id="prefix" name="prefix" required>
                                    <option value="" disabled selected>เลือก</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="firstName" class="form-label fw-bold">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="เช่น สมชาย">
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label fw-bold">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="เช่น ใจดี">
                            </div>
                            <div class="col-md-6">
                                <label for="birthDate" class="form-label fw-bold">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="birthDate" name="birthDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">อีเมล <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="08x-xxxxxxx">
                            </div>
                        </div>

                        <h4 class="text-primary mt-5 mb-4 border-bottom pb-2">3. ข้อมูลการศึกษา</h4>
                        <div class="mb-3">
                            <label for="educationLevel" class="form-label fw-bold">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                            <select class="form-select" id="educationLevel" name="educationLevel" required>
                                <option value="" disabled selected>--- เลือกระดับการศึกษาสูงสุด ---</option>
                                <option value="ม.6/ปวช.">มัธยมศึกษาตอนปลาย/ปวช.</option>
                                <option value="ปวส./อนุปริญญา">ปวส./อนุปริญญา</option>
                                <option value="ปริญญาตรี">ปริญญาตรี</option>
                                <option value="ปริญญาโท">ปริญญาโท</option>
                                <option value="ปริญญาเอก">ปริญญาเอก</option>
                            </select>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="major" class="form-label">สาขาวิชา/วิชาเอก</label>
                                <input type="text" class="form-control" id="major" name="major" placeholder="เช่น วิศวกรรมซอฟต์แวร์">
                            </div>
                            <div class="col-md-6">
                                <label for="university" class="form-label">สถาบันการศึกษา</label>
                                <input type="text" class="form-control" id="university" name="university" placeholder="เช่น มหาวิทยาลัยเทคโนโลยีล้ำยุค">
                            </div>
                        </div>

                        <h4 class="text-primary mt-5 mb-4 border-bottom pb-2">4. ความสามารถพิเศษและประสบการณ์</h4>
                        <div class="mb-3">
                            <label for="specialSkills" class="form-label fw-bold">ความสามารถพิเศษ / ทักษะเพิ่มเติม</label>
                            <textarea class="form-control" id="specialSkills" name="specialSkills" rows="3" placeholder="เช่น ทักษะทางภาษา (TOEIC 750), การใช้โปรแกรมเฉพาะทาง (Adobe Suite, Python)"></textarea>
                            <div class="form-text">โปรดระบุทักษะหรือความสามารถที่เกี่ยวข้องกับตำแหน่งงาน</div>
                        </div>
                        <div class="mb-4">
                            <label for="workExperience" class="form-label fw-bold">ประสบการณ์ทำงาน (โดยสรุป)</label>
                            <textarea class="form-control" id="workExperience" name="workExperience" rows="5" placeholder="เช่น บริษัท A ตำแหน่ง X ระยะเวลา (ปี-ปี), รับผิดชอบ..."></textarea>
                            <div class="form-text">โปรดระบุประสบการณ์ทำงานที่ผ่านมา (ถ้ามี)</div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                            <button type="submit"  name = "Submit" class="btn btn-primary btn-lg px-4 me-md-2">ส่งใบสมัคร</button>
                            <button type="reset" class="btn btn-outline-secondary btn-lg px-4">ล้างข้อมูล</button>
                        </div>

                    </form>
                </div>			
                <div class="card-footer text-muted text-center">
                    **บริษัท เทคโนโลยีล้ำยุค จำกัด** ขอขอบคุณที่ให้ความสนใจร่วมงานกับเรา
                </div>
            </div>
        </div>
    </div>
    <?php
 	if (isset($_POST['Submit'])) {
            $position = $_POST['position'] ;
            $prefix = $_POST['prefix'] ;
            $firstName = $_POST['firstName'] ;
            $lastName = $_POST['lastName'];
            $birthDate= $_POST['birthDate'];
            $email= $_POST['email'] ;
            $phone = $_POST['phone'] ;
            $major = $_POST['major'] ;
            $university = $_POST['university'] ;
            $specialSkills = $_POST['specialSkills'] ;
            $workExperience = $_POST['workExperience'] ;
            
            
			include_once("connectdb.php");
			
			$sql = "INSERT INTO application (a_id, a_position, a_prefix, a_firstName, a_lastName, a_birthDate, a_email, a_phone, a_major, a_university, a_specialSkills, a_workExperience ) VALUES (NULL, '{$position}', '{$prefix}', '{$firstName}', '{$lastName}', '{$birthDate}', '{$email}', '{$phone }', '{$major}', '{$university }', '{$specialSkills}', '{$workExperience}');";
			mysqli_query($conn, $sql) or die("insert ไม่ได้");
			
			echo "<script>";
			echo "alert('บันทึกข้อมูลสำเร็จ');";
			echo "</script>"; 
			
             }
            ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>