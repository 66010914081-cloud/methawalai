<?php
	include_once("checklogin.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - Admin Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); margin-bottom: 5px; border-radius: 8px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background: #0d6efd; color: white; }
        .main-content { padding: 2rem; }
        .order-container { background: white; border-radius: 15px; padding: 20px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
        .status-badge { font-weight: 500; font-size: 0.85rem; padding: 0.5em 0.8em; border-radius: 50px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle fs-1 text-warning"></i>
                <h6 class="mt-2"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link active" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                <hr>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a></li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3"><i class="bi bi-cart3 text-success"></i> รายการสั่งซื้อสินค้า</h1>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary btn-sm">ทั้งหมด</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm text-primary">รอชำระเงิน</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm text-success">จัดส่งแล้ว</button>
                </div>
            </div>

            <div class="order-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>เลขที่คำสั่งซื้อ</th>
                                <th>ชื่อลูกค้า</th>
                                <th>วันที่สั่งซื้อ</th>
                                <th>ยอดรวม</th>
                                <th class="text-center">สถานะ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-66001</td>
                                <td>สมชาย สายลม</td>
                                <td>03 ก.พ. 2026 | 10:30</td>
                                <td class="fw-bold text-primary">฿2,450.00</td>
                                <td class="text-center">
                                    <span class="status-badge bg-warning-subtle text-warning">รอการตรวจสอบ</span>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm border" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="order_details.php?id=1"><i class="bi bi-eye me-2"></i>ดูรายละเอียด</a></li>
                                            <li><a class="dropdown-item text-success" href="#"><i class="bi bi-check2-circle me-2"></i>ยืนยันออเดอร์</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-x-circle me-2"></i>ยกเลิกออเดอร์</a></li>
                                        </ul>
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