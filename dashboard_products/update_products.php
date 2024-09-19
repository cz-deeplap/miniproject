<?php
$host = 'localhost';
$db = 'db_projct';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$id = 0;
$product = null;

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $result = $conn->query("SELECT * FROM tblproducts WHERE id = $id");
    $product = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image_name = null;
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $image_name = basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
            exit();
        }
    }

    if ($id) {
        $sql = "UPDATE tblproducts SET name = ?, description = ?, price = ?" . ($image_name ? ", image = ?" : "") . " WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if ($image_name) {
            $stmt->bind_param("ssssi", $name, $description, $price, $image_name, $id);
        } else {
            $stmt->bind_param("ssdi", $name, $description, $price, $id);
        }
        
        if ($stmt->execute()) {
            echo "<script>alert('Record Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>"; 
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>"; 
        }
    } else {
        $sql = "INSERT INTO tblproducts (name, description, price, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssds", $name, $description, $price, $image_name);
        
        if ($stmt->execute()) {
            echo "<script>alert('Product added successfully!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>"; 
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>"; 
        }
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $id ? "Edit" : "Add"; ?> Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>update Product</h1>
    <hr>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo isset($product) ? htmlspecialchars($product['id']) : ''; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($product) ? htmlspecialchars($product['name']) : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required><?php echo isset($product) ? htmlspecialchars($product['description']) : ''; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo isset($product) ? htmlspecialchars($product['price']) : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <?php if (isset($product) && $product['image']): ?>
                <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="Current Image" style="width: 100px; height: auto; margin-top: 10px;">
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo $id ? "Update" : "Add"; ?> Product</button>
        <a href="index.php?p=dashboard_products/edit_products" class="btn btn-primary">Back to Manage</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
