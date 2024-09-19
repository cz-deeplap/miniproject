<?php
$host = 'localhost';
$db = 'db_projct';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่ามี ID หรือไม่
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM tblproducts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        die("Product not found.");
    }
    $stmt->close();
}

// อัปเดตข้อมูลเมื่อส่งฟอร์ม
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = $conn->real_escape_string($_POST['price']);
    $image = $_FILES['image']['name'];

    // โลจิกการอัปโหลดรูปภาพ (ถ้าต้องการ)
    if (!empty($image)) {
        // Validate the image type and size here before moving it
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);
        $sql = "UPDATE tblproducts SET name=?, description=?, price=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdsi", $name, $description, $price, $image, $id);
    } else {
        $sql = "UPDATE tblproducts SET name=?, description=?, price=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdi", $name, $description, $price, $id);
    }
}

// Fetch all products for display
$productsResult = $conn->query("SELECT * FROM tblproducts");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="information-heading">Manage Product</h1>
    <hr>
    <table id="mytable" class="table">
        <thead class="table-dark">
            <tr style="text-align: center;">
                <th>#</th> 
                <th>Image</th> 
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
    <?php while ($row = $productsResult->fetch_assoc()) { ?>
        <tr style="text-align: center;">
            <td><?php echo $row['id']; ?></td>
            <td>
    <?php if (!empty($row['image'])): ?>
        <a href="uploads/<?php echo $row['image']; ?>" data-lightbox="product-<?php echo $row['id']; ?>" data-title="<?php echo $row['name']; ?>">
            <img src="uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" style="width: 30px; height: auto;">
        </a>
    <?php else: ?>
        No Image
    <?php endif; ?>
</td>

            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="index.php?p=dashboard_products/update_products&id=<?php echo $row['id']; ?>" style="text-decoration: none;">
                    <ion-icon name="create-outline" style="width: 20px; padding: 0 0 0 20px; color: #0042dd;"></ion-icon>
                </a>

                <a href="index.php?p=dashboard_products/delete&del=<?php echo $row['id']; ?>">
                    <ion-icon name="trash-outline" style="width: 20px; padding: 0 15px 0 13px; color: #ff0000ab"></ion-icon>
                </a>
            </td>
        </tr>
    <?php } ?>
</tbody>

    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
