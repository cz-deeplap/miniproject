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
        <div class="row">
            <?php while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Display product image -->
                        <!-- <img src="<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['name']); ?>"> -->
                        <img src="images1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nameproduct : <?php echo htmlspecialchars($row['name']); ?></h5>
                            <p class="card-text">Price : <?php echo htmlspecialchars($row['price']); ?> ฿</p>
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
