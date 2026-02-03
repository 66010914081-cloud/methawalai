<?php
	include_once("checklogin.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - Admin Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); margin-bottom: 5px; border-radius: 8px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background: #0d6efd; color: white; }
        .main-content { padding: 2rem; }
        .customer-container { background: white; border-radius: 15px; padding: 20px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
        .avatar-circle {
            width: 40px; height: 40px; background-color: #e9ecef;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%; color: #6c757d; font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle fs-1 text-danger"></i>
                <h6 class="mt-2 text-white"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link active" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                <hr>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a></li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3"><i class="bi bi-people text-danger"></i> ข้อมูลลูกค้า</h1>
                <div class="input-group style='max-width: 300px;'>
                    <input type="text" class="form-control" placeholder="ค้นหาชื่อลูกค้า...">
                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="customer-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 60px;">#</th>
                                <th>ข้อมูลติดต่อ</th>
                                <th>อีเมล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th class="text-center">วันที่สมัคร</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="avatar-circle">ส</div>
                                </td>
                                <td>
                                    <strong>สมชาย ใจดี</strong><br>
                                    <small class="text-muted">ID: CUST-001</small>
                                </td>
                                <td>somchai@example.com</td>
                                <td>081-234-5678</td>
                                <td class="text-center">01 ก.พ. 2026</td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-primary" title="ดูประวัติการซื้อ"><i class="bi bi-clock-history"></i></button>
                                        <button class="btn btn-outline-danger" title="ระงับสมาชิก"><i class="bi bi-slash-circle"></i></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            
           
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>