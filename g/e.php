<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>อุบลวรรณ ลีล้าน้อย พรีม</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container { width: 45%; float: left; margin: 10px; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
    </style>
</head>

<body>
<h1>อุบลวรรณ ลีล้าน้อย พรีม</h1>

<div style="overflow: hidden;">
    <div class="chart-container"><canvas id="barChart"></canvas></div>
    <div class="chart-container"><canvas id="pieChart"></canvas></div>
</div>

<table border="1">
    <tr>
        <th>ประเทศ</th>
        <th>ยอดขาย</th>
    </tr>
<?php
include_once("connectdb.php");
$sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`;";
$rs = mysqli_query($conn, $sql);

$labels = []; // เก็บชื่อประเทศ
$values = []; // เก็บยอดขาย

while ($data = mysqli_fetch_array($rs)) {
    $labels[] = $data['p_country'];
    $values[] = $data['total'];
?>
    <tr>
        <td><?php echo $data['p_country'];?></td>
        <td><?php echo number_format($data['total'], 2);?></td>
    </tr>
<?php
} 
mysqli_close($conn);
?>
</table>

<script>
// 2. เตรียมข้อมูลจาก PHP ใส่ JavaScript
const labels = <?php echo json_encode($labels); ?>;
const dataValues = <?php echo json_encode($values); ?>;

// 3. สร้าง Bar Chart
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรายประเทศ',
            data: dataValues,
            backgroundColor: 'rgba(54, 162, 235, 0.6)'
        }]
    }
});

// 4. สร้าง Pie Chart
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: [
                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
            ]
        }]
    }
});
</script>

</body>
</html>