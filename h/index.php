<?php
session_start();
include_once("connectdb.php");

if (isset($_POST['Submit'])) {
    $user = $_POST['auser'];
    $pwd = $_POST['apwd'];

    // ป้องกัน SQL Injection ด้วย Prepared Statement
    $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $user); // "s" หมายถึง string
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($data = mysqli_fetch_assoc($result)) {
        // ตรวจสอบรหัสผ่านที่เข้ารหัส (Hash)
        // หมายเหตุ: ใน DB ช่อง a_password ต้องเก็บค่าที่ได้จาก password_hash() เท่านั้น
        if (password_verify($pwd, $data['a_password'])) {
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            echo "<script>window.location='index2.php';</script>";
            exit;
        } else {
            $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
    } else {
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - อุบลวรรณ ลีล้าน้อย (พรีม)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card p-4">
                <div class="card-body">
                    <h4 class="text-center text-primary mb-4">เข้าสู่ระบบ</h4>
                    <p class="text-center text-muted">อุบลวรรณ (พรีม)</p>

                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger py-2 text-center" style="font-size: 0.9rem;">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="auser" class="form-control" placeholder="กรอกชื่อผู้ใช้" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="apwd" class="form-control" placeholder="กรอกรหัสผ่าน" required>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>