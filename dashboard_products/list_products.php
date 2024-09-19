<?php
$host = 'localhost';
$db = 'db_projct';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tblproducts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylepro.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <h1 class="information-heading-1">List products</h1>
    <hr>
        <div class="row">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <p class="card-text"><strong>Price: <?php echo $row['price']; ?></strong></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
