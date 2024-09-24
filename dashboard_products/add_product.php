<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link rel="stylesheet" href="stylepro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" id="productName" name="name" class="form-control" placeholder="Product Name" required>
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea id="productDescription" name="description" class="form-control" placeholder="Description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" id="productPrice" step="0.01" name="price" class="form-control" placeholder="Price" required>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Upload Image</label>
            <input type="file" id="productImage" name="image" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
