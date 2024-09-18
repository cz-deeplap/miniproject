<?php
include_once('dashboard_pro/functionsproduct.php');
$updatedata = new DB_con();
if(isset($_POST['update'])) {
    $proid = $_GET['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = $updatedata->update($proid, $name, $price);
    if ($sql) {
        echo "<script>alert('Record Updated Successfully!');</script>";
        echo "<script>window.location.href='index.php?p=dashboard_pro/managepro'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='index.php?p=dashboard_pro/managepro'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container-1">
    <h1 class="information-heading" style="font-size: 34px;">Update Page</h1>
<hr>
        <?php
            $proid = $_GET['id'];
            $updatepro = new DB_con();
            $sql = $updatepro->fetchonerecord($proid);
            while($row = mysqli_fetch_array($sql)) {
        ?>

<form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo $row['price']?>" required>
            </div>
            <?php
            }
            ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="index.php?p=dashboard_pro/managepro" class="btn btn-primary">Back to Manage product</a>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>