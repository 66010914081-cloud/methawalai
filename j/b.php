<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เมธาวาลัย พรมน้อย (มายด์)</title>
</head>

<body>

<h1>งาน j</h1>
<h1>ข้อมูลจังหวัด --- เมธาวาลัย พรมน้อย (มายด์)</h1>
    
<form method="post" action="" enctype="multipart/form-data">
	ชื่อจังหวัด <input type="text" name="pname" autofocus required> <br>
    รูปภาพ <input type="file" name="pimage"> <br>
    ชื่อภาค
    <select name="rid">
<?php
	include_once("connectdb.php");
	$sql3 = "SELECT * FROM `regions` ORDER BY `r_name` ASC";
	$rs3 = mysqli_query($conn , $sql3);
	while($data3 = mysqli_fetch_array($rs3)) {
?>
	<option value="<?php echo $data3['r_id'];?>"><?php echo $data3['r_name'];?></option>
    <?php } ?>
    </select> <br><br>
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>
   
   
 <?php
if(isset($_POST['Submit'])) {
	include_once("connectdb.php");
	$pname = $_POST['pname'];
	$ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);
	$rid = $_POST['rid'];
	
	$sql2 = "INSERT INTO `provinces` VALUES (NULL, '{$pname}', '{$ext}' , '{$rid}' )";
	mysqli_query($conn, $sql2) or die ("insert ไม่ได้");
	$pic_id = mysqli_insert_id($conn);
	move_uploaded_file($_FILES['pimage']['tmp_name'],"img/".$pic_id.".".$ext);
	}
?>

<table border="1">
	<tr>
    	<th>รหัสจังหวัด</th>
        <th>ชื่อจังหวัด</th>
        <th>รูปภาพ</th>
        <th>ชื่อภาค</th>
    </tr>
    
<?php
	include_once("connectdb.php");
	$sql = "SELECT * FROM `provinces` AS p
	INNER JOIN `regions` AS r
	ON p.r_id = r.r_id
	ORDER BY `p_id` ASC";
	$rs = mysqli_query($conn , $sql);
	
	while($data = mysqli_fetch_array($rs)) {
		
?>
	<tr>
    	<td><?php echo $data['p_id'];?></td>
        <td><?php echo $data['p_name'];?></td>
        <td><img src="img/<?php echo $data['p_id'];?>.<?php echo $data['p_ext'];?>" width="120"></td>
        <td><?php echo $data['r_name'];?></td>
    </tr> 
<?php } ?>
</table>
</body>
</html>

