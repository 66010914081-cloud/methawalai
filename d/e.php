<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>รับสมัครงาน - เมธาวาลัย พรมน้อย (มายด์)</title>

  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f4f6f9;
      padding-top: 40px;
    }
    .form-box {
      max-width: 700px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h1, h4 {
      text-align: center;
      font-weight: bold;
      color: #0d6efd;
    }
  </style>
</head>

<body>

<div class="container">
  <div class="form-box">
    <h1>ฟอร์มรับสมัครงาน</h1>
    <h4>บริษัท เมธาวาลัย จำกัด</h4>
    <hr>

    <form method="post" action="f.php">
      <!-- ตำแหน่งงาน -->
      <div class="mb-3">
        <label class="form-label">ตำแหน่งที่ต้องการสมัคร *</label>
        <select name="position" class="form-select" required>
          <option value="">-- เลือกตำแหน่งงาน --</option>
          <option value="โปรแกรมเมอร์">โปรแกรมเมอร์ (Programmer)</option>
          <option value="นักการตลาดออนไลน์">นักการตลาดออนไลน์ (Online Marketing)</option>
          <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก (Graphic Designer)</option>
          <option value="เจ้าหน้าที่บุคคล">เจ้าหน้าที่บุคคล (HR Officer)</option>
          <option value="เจ้าหน้าที่ IT Support">เจ้าหน้าที่ IT Support</option>
        </select>
      </div>

      <!-- คำนำหน้า -->
      <div class="mb-3">
        <label class="form-label">คำนำหน้าชื่อ *</label>
        <select name="title" class="form-select" required>
          <option value="">-- เลือกคำนำหน้า --</option>
          <option value="นาย">นาย</option>
          <option value="นางสาว">นางสาว</option>
          <option value="นาง">นาง</option>
        </select>
      </div>

      <!-- ชื่อสกุล -->
      <div class="mb-3">
        <label class="form-label">ชื่อ-สกุล *</label>
        <input type="text" name="fullname" class="form-control" required>
      </div>

      <!-- วันเกิด -->
      <div class="mb-3">
        <label class="form-label">วันเดือนปีเกิด *</label>
        <input type="date" name="birthday" class="form-control" required>
      </div>

      <!-- ระดับการศึกษา -->
      <div class="mb-3">
        <label class="form-label">ระดับการศึกษา *</label>
        <select name="education" class="form-select" required>
          <option value="">-- เลือกระดับการศึกษา --</option>
          <option value="ม.6 / ปวช.">ม.6 / ปวช.</option>
          <option value="ปวส.">ปวส.</option>
          <option value="ปริญญาตรี">ปริญญาตรี</option>
          <option value="ปริญญาโท">ปริญญาโท</option>
          <option value="อื่น ๆ">อื่น ๆ</option>
        </select>
      </div>

      <!-- ความสามารถพิเศษ -->
      <div class="mb-3">
        <label class="form-label">ความสามารถพิเศษ</label>
        <textarea name="skills" class="form-control" rows="3"
          placeholder="เช่น พิมพ์สัมผัสได้ 80 คำ/นาที, ใช้ Photoshop ได้ดี"></textarea>
      </div>

      <!-- ประสบการณ์ -->
      <div class="mb-3">
        <label class="form-label">ประสบการณ์ทำงาน</label>
        <textarea name="experience" class="form-control" rows="4"
          placeholder="ระบุบริษัทเดิม หน้าที่ ความรับผิดชอบ ระยะเวลา"></textarea>
      </div>

      <!-- ปุ่ม -->
      <div class="d-grid gap-2">
        <button type="submit" name="Submit" class="btn btn-primary">ส่งใบสมัคร</button>
        <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
      </div>

    </form>
  </div>

  <br>

  <!-- การประมวลผล PHP -->
  <?php
  if (isset($_POST['Submit'])) {

    echo "<div class='alert alert-success mt-3'>";
    echo "<h5>ข้อมูลผู้สมัคร</h5>";

    echo "ตำแหน่งที่สมัคร: " . $_POST['position'] . "<br>";
    echo "คำนำหน้า: " . $_POST['title'] . "<br>";
    echo "ชื่อ-สกุล: " . $_POST['fullname'] . "<br>";
    echo "วันเกิด: " . $_POST['birthday'] . "<br>";
    echo "ระดับการศึกษา: " . $_POST['education'] . "<br>";
    echo "ความสามารถพิเศษ: " . nl2br($_POST['skills']) . "<br>";
    echo "ประสบการณ์ทำงาน: " . nl2br($_POST['experience']) . "<br>";

    echo "</div>";
  }
  ?>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>