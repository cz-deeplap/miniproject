<?php
include_once('dashboard_pro/functionsproduct.php');
$fetchdata = new DB_con();
$sql = $fetchdata->fetchdata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-1">
        <h1 class="information-heading">Show Products</h1>
        <hr>
        <div class="row">
            <?php while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="col-md-3 mb-4"> <!-- เปลี่ยนจาก col-md-4 เป็น col-md-3 -->
    <div class="card" style="width: 100%; height: auto;"> <!-- ใช้ style เพื่อลดขนาด -->
        <img src="pic/propic/itstore.png" class="card-img-top" alt="Product Image" style="max-height: 150px; object-fit: cover;"> <!-- ปรับความสูงของภาพ -->
        <div class="card-body">
            <h5 class="card-title" style="font-size: 1rem;">Product Name: <?php echo htmlspecialchars($row['name']); ?></h5> <!-- ปรับขนาดฟอนต์ -->
            <p class="card-text" style="font-size: 0.875rem;">Price: <?php echo htmlspecialchars($row['price']); ?> ฿</p> <!-- ปรับขนาดฟอนต์ -->
        </div>
    </div>
</div>

            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
