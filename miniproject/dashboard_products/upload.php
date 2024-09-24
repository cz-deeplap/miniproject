<?php
$host = 'localhost';
$db = 'db_projct';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Check and upload image file
    $target_dir = "uploads/";
    $image_name = basename($_FILES["image"]["name"]); // Only the filename
    $target_file = $target_dir . $image_name; // Full path for moving the file

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Prepare the SQL statement
        $sql = "INSERT INTO tblproducts (name, description, price, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssds", $name, $description, $price, $image_name);

        if ($stmt->execute()) {
            // Success
            echo "<script>alert('Product added successfully!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
        } else {
            // Error in SQL execution
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
        }

        $stmt->close();
    } else {
        // File upload failed
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        echo "<script>window.location.href='index.php?p=dashboard_products/edit_products';</script>";
    }
}

$conn->close();
?>
