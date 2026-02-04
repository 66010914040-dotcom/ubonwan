<?php
    include_once("check_login.php");
	 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จัดการออเดอร์ - พรีม</title>
</head>

<body>
<h1>จัดการออเดอร์ - พรีม</h1>

<?php echo "แอดมิน" .$SESSION[''];?><br>

<ul>
<a harf="products.php"><li>การจัดกรสินค้า</li></a>
<a harf="orders.php"><li>จัดการออเดอร์</li></a>
<a harf="customers.php"><li>จัดการลูกค้า</li></a>
<a harf="logout.php"><li>ออกจากระบบ</li></a>
</body>
</html>