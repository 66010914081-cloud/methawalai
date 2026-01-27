<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ผลการสมัครงาน</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f7f8fa; padding-top:40px;">

<div class="container">
    <div class="card shadow p-4 mx-auto" style="max-width:750px;">
        <h2 class="text-center text-primary mb-4">ข้อมูลใบสมัครงาน</h2>
        <hr>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // รับค่าจากฟอร์ม
            $position   = $_POST['position'];
            $title      = $_POST['title'];
            $fullname   = $_POST['fullname'];
            $birthday   = $_POST['birthday'];
            $education  = $_POST['education'];
            $skills     = nl2br($_POST['skills']);
            $experience = nl2br($_POST['experience']);

            echo "<div class='mt-3'>";
            echo "<p><strong>ตำแหน่งที่สมัคร:</strong> $position</p>";
            echo "<p><strong>คำนำหน้า:</strong> $title</p>";
            echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
            echo "<p><strong>วันเดือนปีเกิด:</strong> $birthday</p>";
            echo "<p><strong>ระดับการศึกษา:</strong> $education</p>";
            echo "<p><strong>ความสามารถพิเศษ:</strong><br> $skills</p>";
            echo "<p><strong>ประสบการณ์ทำงาน:</strong><br> $experience</p>";
            echo "</div>";

        } else {
            echo "<div class='alert alert-warning text-center'>ไม่มีข้อมูลที่ส่งมา กรุณากรอกฟอร์มใหม่อีกครั้ง</div>";
        }
        ?>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-primary">กลับไปหน้าฟอร์ม</a>
        </div>
    </div>
</div>

</body>
</html>