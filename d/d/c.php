<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>อุบลวรรณ ลีล้าน้อย (พรีม) 66010914040</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="h4 mb-0">ฟอร์มรับข้อมูล - อุบลวรรณ ลีล้าน้อย (พรีม) Gemini</h1>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="heigth" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="heigth" name="heigth" min="100" max="200" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" id="address" name="address" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">สีที่ชอบ</label>
                        <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="เลือกสี">
                    </div>

                    <div class="mb-3">
                        <label for="major" class="form-label">สาขาวิชา</label>
                        <select class="form-select" id="major" name="major">
                            <option value="การบัญชี">การบัญชี</option>
                            <option value="การตลาด">การตลาด</option>
                            <option value="การจัดการ">การจัดการ</option>
                            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                        </select>
                    </div>
                    
                    <hr>
                    
                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" name="Submit" class="btn btn-success me-2">
                            <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                        </button>
                        <button type="reset" class="btn btn-warning me-2">
                            <i class="bi bi-arrow-counterclockwise"></i> ยกเลิก
                        </button>
                        <button type="button" onClick="window.location='https://www.msu.ac.th/';" class="btn btn-info me-2 text-white">
                            Go to MSU
                        </button>
                        <button type="button" onMouseOver="alert('จ๊ะเอ๋!');" class="btn btn-secondary me-2">
                            Hello
                        </button>
                        <button type="button" onClick="window.print();" class="btn btn-outline-dark">
                            <i class="bi bi-printer-fill"></i> พิมพ์
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['Submit'])) {
            $fullname = $_POST['fullname'] ;
            $phone = $_POST['phone'] ;
            $heigth = $_POST['heigth'] ;
            $address = $_POST['address'];
            $birthday= $_POST['birthday'];
            $color = $_POST['color'] ;
            $major = $_POST['major'] ;
            
            echo "<div class='mt-4'>";
            echo "<div class='alert alert-success' role='alert'>✅ **ส่งข้อมูลเรียบร้อยแล้ว**</div>";
            echo "<div class='card'>";
            echo "<div class='card-header bg-success text-white'>สรุปข้อมูลที่กรอก</div>";
            echo "<ul class='list-group list-group-flush'>";
            echo "<li class='list-group-item'>**ชื่อ-สกุล:** {$fullname}</li>";
            echo "<li class='list-group-item'>**เบอร์โทร:** {$phone}</li>";
            echo "<li class='list-group-item'>**ส่วนสูง:** {$heigth} ซม.</li>";
            echo "<li class='list-group-item'>**ที่อยู่:** <p class='card-text mt-2'>{$address}</p></li>";
            echo "<li class='list-group-item'>**วันเดือนปีเกิด:** {$birthday}</li>";
            echo "<li class='list-group-item d-flex align-items-center'>**สีที่ชอบ:** <span class='badge' style='background-color:{$color}; color: ". (hexdec(str_replace('#', '', $color)) > 0xffffff/2 ? '#000000' : '#FFFFFF') ."; margin-left: 10px;'>{$color}</span>
                    <div style='background-color:{$color};width:30px;height:30px;border:1px solid #ccc;margin-left: 10px;'></div>
                  </li>";
            echo "<li class='list-group-item'>**สาขาวิชา:** {$major}</li>";
            echo "</ul>";
            echo "</div>";
            echo "</div>";
        }
        ?>	

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>