<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เมธาวาลัย พรมน้อย (มายด์)</title>
</head>

<body>
<h1>เมธาวาลัย พรมน้อย (มายด์)</h1>

<form method="post" action="">
กรอกคะแนน<input type="number" name="a" autofocus min = 0 max = 100 required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])){
	
	$score = $_POST['a'];
	
	if ($score >= 80){
		echo "คะแนน $score ได้เกรด A";
	} else if ($score >= 70){
		echo "คะแนน $score ได้เกรด B";
	} else if ($score  >= 60){
		echo "คะแนน $score ได้เกรด C";
	} else if ($score >= 50){
		echo "คะแนน $score ได้เกรด D";
	} else {
		echo "คะแนน $score ได้เกรด F";
	} 

}
?>
</body>
</html>