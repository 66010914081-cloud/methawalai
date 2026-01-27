<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เมธาวาลัย พรมน้อย (มายด์)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; padding-top: 50px; }
        .card { border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .table img { border-radius: 5px; object-fit: cover; }
    </style>
</head>

<body>

<div class="container">
    <div class="card p-4">
        <h1 class="text-center mb-4 text-primary">เมธาวาลัย พรมน้อย (มายด์)</h1>
        
        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-hover border">
                <thead class="table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>สินค้า</th>
                        <th>ประเภทสินค้า</th>
                        <th>วันที่</th>
                        <th>ประเทศ</th>
                        <th class="text-end">จำนวนเงิน</th>
                        <th class="text-center">รูป</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once("connectdb.php");
                    $sql = "SELECT * FROM `popsupermarket` ORDER BY p_order_id DESC";
                    $rs = mysqli_query($conn, $sql);
                    $total = 0;
                    while ($data = mysqli_fetch_array($rs)){
                        $total += $data['p_amount'];
                ?>
                <tr>
                    <td><?php echo $data['p_order_id'];?></td>
                    <td><?php echo $data['p_product_name'];?></td>
                    <td><span class="badge bg-info text-dark"><?php echo $data['p_category'];?></span></td>
                    <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                    <td><?php echo $data['p_country'];?></td>
                    <td align="right" class="fw-bold"><?php echo number_format($data['p_amount'], 0);?></td>
                    <td align="center">
                        <img src="<?php echo $data['p_product_name'];?>.jpg" 
                             width="55" height="55" 
                             alt="product"
                             onerror="this.src='https://via.placeholder.com/55?text=No+Img'">
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <th colspan="5" class="text-end">ยอดรวมทั้งสิ้น:</th>
                        <th class="text-end text-danger fs-5"><?php echo number_format($total, 0);?></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json" // ภาษาไทย
            },
            "pageLength": 10,
            "order": [[0, "desc"]] // เรียง Order ID จากมากไปน้อย
        });
    });
</script>

</body>
</html>