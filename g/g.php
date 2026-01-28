<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>อุบลวรรณ ลีล้าน้อย พรีม</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .chart-container { 
            display: flex; 
            flex-wrap: wrap; 
            gap: 20px; 
            justify-content: center;
            margin-bottom: 30px;
        }
        .chart-box { width: 400px; height: 300px; }
        table { width: 60%; margin: 0 auto; border-collapse: collapse; text-align: center; }
        th, td { padding: 10px; }
    </style>
</head>

<body>
<h1 style="text-align:center;">อุบลวรรณ ลีล้าน้อย พรีม</h1>

<div class="chart-container">
    <div class="chart-box"><canvas id="barChart"></canvas></div>
    <div class="chart-box"><canvas id="doughnutChart"></canvas></div>
</div>

<table border="1">
    <tr bgcolor="#eeeeee">
        <th>เดือน</th>
        <th>ยอดขาย</th>
    </tr>
<?php
include_once("connectdb.php");
$sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
$rs = mysqli_query($conn, $sql);

$labels = [];
$values = [];

while ($data = mysqli_fetch_array($rs)) {
    // เตรียมข้อมูลสำหรับกราฟ
    $labels[] = "เดือน " . $data['Month'];
    $values[] = $data['Total_Sales'];
?>
    <tr>
        <td><?php echo "เดือน " . $data['Month'];?></td>
        <td><?php echo number_format($data['Total_Sales'], 2);?></td>
    </tr>
<?php
} 
mysqli_close($conn);
?>
</table>

<script>
// รับข้อมูลจาก PHP มาเป็น JSON
const chartLabels = <?php echo json_encode($labels); ?>;
const chartData = <?php echo json_encode($values); ?>;

// ชุดสีสำหรับกราฟ
const colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'];

// 1. กราฟ Bar
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: chartLabels,
        datasets: [{
            label: 'ยอดขายรายเดือน',
            data: chartData,
            backgroundColor: colors,
            borderWidth: 1
        }]
    },
    options: { maintainAspectRatio: false }
});

// 2. กราฟ Doughnut
new Chart(document.getElementById('doughnutChart'), {
    type: 'doughnut',
    data: {
        labels: chartLabels,
        datasets: [{
            data: chartData,
            backgroundColor: colors,
            hoverOffset: 4
        }]
    },
    options: { maintainAspectRatio: false }
});
</script>

</body>
</html>