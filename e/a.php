<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสมัครสมาชิก -- เมธาวาลัย พรมน้อย (มายด์) Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* กำหนดความกว้างสูงสุดของฟอร์ม */
    .form-container {
        max-width: 500px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 form-container">
            <h1 class="text-center mb-4">ฟอร์มสมัครสมาชิก</h1>
            <p class="text-center text-muted">เมธาวาลัย พรมน้อย (มายด์) Gemini</p>

            <form method="post" action="">

                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="height" name="height" step="1" min="100" max="220" required>
                        <span class="input-group-text">ซม.</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c">
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="d-grid gap-2 d-md-block mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary me-2">
                        <i class="bi bi-person-check-fill"></i> สมัครสมาชิก
                    </button>
                    <button type="reset" class="btn btn-secondary me-2">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </button>
                    <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info me-2">
                        Go to MSU
                    </button>
                    <button type="button" onClick="window.print();" class="btn btn-light">
                        <i class="bi bi-printer-fill"></i> พิมพ์
                    </button>
                </div>
            </form>

            <hr class="my-4">

             <?php
				if (isset($_POST['Submit'])) {

    			$fullname = $_POST['fullname'];
    			$phone = $_POST['phone'];
   			 	$height = $_POST['height'];
    			$color = $_POST['color'];
    			$major = $_POST['major'];
				
				include_once("connectdb.php");
				
    			$sql = "INSERT INTO register (r_id, r_name, r_phone, r_height, r_color, r_major) VALUES (NULL, '{$fullname}', '{$phone}', '{$height}', '{$color}', '{$major}');";

    			mysqli_query($conn, $sql) or die ("insert ข้อมูลไม่ได้");

    			echo "<script>";
    			echo "alert('เพิ่มข้อมูลสำเร็จ');";
    			echo "</script>";
}
?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>