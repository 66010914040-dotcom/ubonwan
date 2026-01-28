<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>อุบลวรรณ ลีล้าน้อย (พรีม) 66010914040</title>
  
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 600px;
      margin-top: 50px;
    }
    h1 {
      text-align: center;
      color: #495057;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control, .form-select {
      border-radius: 0.375rem;
    }
    .color-preview {
      width: 100px;
      height: 40px;
      border-radius: 0.375rem;
    }
    .button-group button {
      margin-right: 10px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>ฟอร์มรับข้อมูล - อุบลวรรณ ลีล้าน้อย (พรีม) Chat GPT</h1>

    <form method="post" action="">

      <div class="mb-3">
        <label for="fullname" class="form-label">ชื่อ-สกุล</label>
        <input type="text" name="fullname" id="fullname" class="form-control" autofocus required>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">เบอร์โทร</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="heigth" class="form-label">ส่วนสูง</label>
        <input type="number" name="heigth" id="heigth" class="form-control" min="100" max="200" required>
        <small class="form-text text-muted">ระบุเป็นเซนติเมตร (ซม.)</small>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">ที่อยู่</label>
        <textarea name="address" id="address" class="form-control" cols="40" rows="4"></textarea>
      </div>

      <div class="mb-3">
        <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
        <input type="date" name="birthday" id="birthday" class="form-control">
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">สีที่ชอบ</label>
        <input type="color" name="color" id="color" class="form-control">
        <div class="color-preview mt-2" style="background-color: {{ color }}"></div>
      </div>

      <div class="mb-3">
        <label for="major" class="form-label">สาขาวิชา</label>
        <select name="major" id="major" class="form-select">
          <option value="การบัญชี">การบัญชี</option>
          <option value="การตลาด">การตลาด</option>
          <option value="การจัดการ">การจัดการ</option>
          <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
        </select>
      </div>

      <div class="button-group">
        <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
        <button type="reset" class="btn btn-secondary">ยกเลิก</button>
        <button type="button" class="btn btn-info" onClick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
        <button type="button" class="btn btn-warning" onMouseOver="alert('จ๊ะเอ๋!');">Hello</button>
        <button type="button" class="btn btn-success" onClick="window.print();">พิมพ์</button>
      </div>

    </form>

    <hr>

    <?php
    if (isset($_POST['Submit'])) {
      $fullname = $_POST['fullname'];
      $phone = $_POST['phone'];
      $heigth = $_POST['heigth'];
      $address = $_POST['address'];
      $birthday = $_POST['birthday'];
      $color = $_POST['color'];
      $major = $_POST['major'];

      echo "<h4>ข้อมูลที่ส่งมา:</h4>";
      echo "<p><strong>ชื่อ-สกุล:</strong> " . htmlspecialchars($fullname) . "</p>";
      echo "<p><strong>เบอร์โทร:</strong> " . htmlspecialchars($phone) . "</p>";
      echo "<p><strong>ส่วนสูง:</strong> " . htmlspecialchars($heigth) . " ซม.</p>";
      echo "<p><strong>ที่อยู่:</strong> " . nl2br(htmlspecialchars($address)) . "</p>";
      echo "<p><strong>วันเดือนปีเกิด:</strong> " . htmlspecialchars($birthday) . "</p>";
      echo "<p><strong>สีที่ชอบ:</strong> <div style='background-color: {$color}; width: 50px; height: 20px;'></div></p>";
      echo "<p><strong>สาขาวิชา:</strong> " . htmlspecialchars($major) . "</p>";
    }
    ?>

  </div>

  <!-- Bootstrap JS & Dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
