<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เมธาวาลัย พรมน้อย (มายด์)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	$_SESSION['name'] = "เมธาวาลัย พรมน้อย";
	$_SESSION['nickname'] = "มายด์";
	
	//echo $_SESSION['name'];
	//echo $_SESSION['nickname'];
?>
</body>
</html>