<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>เมธาวาลัย พรมน้อย (มายด์)</title>
  <!-- เพิ่มลิงก์ไปยังไฟล์ CSS ของ Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* ปรับแต่งเพิ่มเติมถ้าต้องการ */
    body {
      background-color: #f8f9fa;
      padding-top: 50px;
    }
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-container h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    .btn-custom {
      width: 100%;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <h1>ฟอร์มสมัครสมาชิก -- เมธาวาลัย พรมน้อย (มายด์) Chat gpt</h1>

    <form method="post" action="">
      <div class="mb-3">
        <label for="fullname" class="form-label">ชื่อ-สกุล</label>
        <input type="text" name="fullname" id="fullname" class="form-control" required autofocus>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">เบอร์โทร</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="height" class="form-label">ความสูง</label>
        <input type="number" name="height" id="height" class="form-control" step="1" min="100" max="220" required>
        <div class="form-text">หน่วย: ซม.</div>
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">สีที่ชอบ</label>
        <input type="color" name="color" id="color" class="form-control">
      </div>

      <div class="mb-3">
        <label for="major" class="form-label">สาขาวิชา</label>
        <select name="major" id="major" class="form-select" required>
          <option value="การบัญชี">การบัญชี</option>
          <option value="การจัดการ">การจัดการ</option>
          <option value="การตลาด">การตลาด</option>
          <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
        </select>
      </div>

      <div class="d-grid gap-2">
        <button type="submit" name="Submit" class="btn btn-primary btn-custom">สมัครสมาชิก</button>
      </div>
      <div class="d-grid gap-2 mt-2">
        <button type="reset" class="btn btn-secondary btn-custom">Reset</button>
      </div>
      <div class="d-grid gap-2 mt-2">
        <button type="button" class="btn btn-info" onClick="window.location='https://www.msu.ac.th';">ไปยังเว็บไซต์ MSU</button>
      </div>
      <div class="d-grid gap-2 mt-2">
        <button type="button" class="btn btn-success" onClick="window.print();">พิมพ์</button>
      </div>
    </form>
  </div>

  <hr>

  <?php
  if (isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    $major = $_POST['major'];

    echo "<h4>ข้อมูลที่กรอก:</h4>";
    echo "ชื่อ-สกุล: ".$fullname."<br>";
    echo "เบอร์โทร: ".$phone."<br>";
    echo "ความสูง: ".$height." ซม.<br>";
    echo "สีที่ชอบ: <span style='background:{$color}; color: #fff;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br>";
    echo "สาขาวิชา: ".$major."<br>";
  }
  ?>

</div>

<!-- เพิ่มลิงก์ไปยังไฟล์ JavaScript ของ Bootstrap 5.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>