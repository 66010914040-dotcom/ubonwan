<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อุบลวรรณ ลีล้าน้อย พรีม</title>
</head>

<body>
<h1>อุบลวรรณ ลีล้าน้อย พรีม</h1>

<table border="1"
<tr>
    <th>ประเทศ</th>
    <th>ยอดขาย</th>
</tr>
<?php
include_once("connectdb.php");
$sql ="SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)) {
?>
<tr>
    <td><?php echo $data['Month'];?></td>
     <td><?php echo $data['Total_Sales'];?></td>
    
</tr>
<?php
} 
mysqli_close($conn);
?>
</table>

</body>
</html>