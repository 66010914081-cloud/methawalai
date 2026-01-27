<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เมธาวาลัย พรมน้อย (มายด์)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container {
        width: 80%;
        margin: 20px auto;
    }
</style>
</head>

<body>
<h1>เมธาวาลัย พรมน้อย (มายด์)</h1>

<table border="1">
<tr>
	<th>ประเทศ</th>
	<th>ยอดขาย</th>
</tr>
<?php
	include_once("connectdb.php");
	$sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` " ;
	$rs = mysqli_query($conn, $sql) ;
    
    // สร้าง Array รอรับข้อมูลสำหรับทำกราฟ
    $countries = [];
    $totals = [];

	while ($data = mysqli_fetch_array($rs)){
        // เก็บข้อมูลลง Array
        $countries[] = $data['p_country'];
        $totals[] = $data['total'];
?>
<tr>
	<td><?php echo $data['p_country'];?></td>
	<td align="right"><?php echo number_format($data['total'],0);?></td>
</tr>
<?php } ?>
</table>

<hr>

<div class="chart-container">
    <h3>ยอดขายแยกตามประเทศ (Bar Chart)</h3>
    <canvas id="myBarChart"></canvas>
</div>

<div class="chart-container" style="width: 40%;">
    <h3>สัดส่วนยอดขาย (Pie Chart)</h3>
    <canvas id="myPieChart"></canvas>
</div>

<script>
// 2. ส่งค่าจาก PHP Array ไปยัง JavaScript
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// 4. ตั้งค่าสีสำหรับกราฟ
const chartColors = [
    'rgba(255, 99, 132, 0.7)',
    'rgba(54, 162, 235, 0.7)',
    'rgba(255, 206, 86, 0.7)',
    'rgba(75, 192, 192, 0.7)',
    'rgba(153, 102, 255, 0.7)',
    'rgba(255, 159, 64, 0.7)'
];

// สร้าง Bar Chart
const ctxBar = document.getElementById('myBarChart').getContext('2d');
new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรวม',
            data: dataValues,
            backgroundColor: chartColors,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});

// สร้าง Pie Chart
const ctxPie = document.getElementById('myPieChart').getContext('2d');
new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: chartColors,
            hoverOffset: 4
        }]
    }
});
</script>

</body>
</html>