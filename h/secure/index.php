<?php
	session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login: เมธาวาลัย พรมน้อย (มายด์)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        .card-header {
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 2rem;
            text-align: center;
            border: none;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }
        .btn-login {
            padding: 0.8rem;
            font-weight: bold;
            border-radius: 0.5rem;
            transition: all 0.3s;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="container p-3">
    <div class="card login-card mx-auto">
        <div class="card-header">
            <h4 class="mb-0">เข้าสู่ระบบหลังบ้าน</h4>
            <small class="opacity-75">เมธาวาลัย พรมน้อย (มายด์)</small>
        </div>
        <div class="card-body p-4 p-md-5">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="auser" class="form-label text-secondary">Username</label>
                    <input type="text" class="form-control form-control-lg" name="auser" id="auser" placeholder="กรอกชื่อผู้ใช้" autofocus required>
                </div>
                <div class="mb-4">
                    <label for="apwd" class="form-label text-secondary">Password</label>
                    <input type="password" class="form-control form-control-lg" name="apwd" id="apwd" placeholder="กรอกรหัสผ่าน" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-login">
                        เข้าสู่ระบบ
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");
    
    $user = $_POST['auser'];
    $pwd  = $_POST['apwd'];

    // ป้องกัน SQL Injection
    $sql = "SELECT * FROM admin WHERE a_username = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if($data = mysqli_fetch_array($result)) {
        if (password_verify($pwd, $data['a_password'])) {
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: 'กำลังเข้าสู่ระบบ...',
                    timer: 1500,
                    showConfirmButton: false
                }).then(() => {
                    window.location='index2.php';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'ผิดพลาด',
                    text: 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'
                });
            </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'ผิดพลาด',
                text: 'ไม่พบข้อมูลผู้ใช้นี้'
            });
        </script>";
    }
}
?>

</body>
</html>