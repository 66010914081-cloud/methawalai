<?php
	include_once("checklogin.php");
    // เชื่อมต่อฐานข้อมูล (สมมติว่าคุณใช้ไฟล์นี้)
    // include_once("connectdb.php"); 
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - Admin Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); margin-bottom: 5px; border-radius: 8px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background: #0d6efd; color: white; }
        .main-content { padding: 2rem; }
        .table-container { background: white; border-radius: 15px; padding: 20px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle fs-1 text-info"></i>
                <h6 class="mt-2"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a></li>
                <li class="nav-item"><a class="nav-link active" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                <hr>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a></li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3"><i class="bi bi-box-seam text-primary"></i> จัดการข้อมูลสินค้า</h1>
                <a href="add_product.php" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                </a>
            </div>

            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 80px;">รูปภาพ</th>
                                <th>ชื่อสินค้า</th>
                                <th>หมวดหมู่</th>
                                <th>ราคา</th>
                                <th class="text-center">สต็อก</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://via.placeholder.com/50" class="product-img" alt="item"></td>
                                <td><strong>สินค้าตัวอย่าง A</strong><br><small class="text-muted">SKU: PROD-001</small></td>
                                <td>เครื่องใช้ไฟฟ้า</td>
                                <td>฿1,500.00</td>
                                <td class="text-center"><span class="badge bg-success">24</span></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="edit_product.php?id=1" class="btn btn-outline-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-outline-danger" onclick="return confirm('ยืนยันการลบ?')"><i class="bi bi-trash"></i></a>
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