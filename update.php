<?php
include_once('functions.php');
$updatedata = new DB_con();
if(isset($_POST['update'])) {
    $userid = $_GET['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];

    $sql = $updatedata->update($fname, $lname, $email, $phonenumber, $address, $userid);
    if ($sql) {
        echo "<script>alert('Record Updated Successfully!');</script>";
        echo "<script>window.location.href='index.php?p=showuser'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href=index.php?p=update'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container-1">
    <h1 class="" style="font-size: 34px;">Update Page</h1>
        <hr>
        <?php
        
            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
        ?>

<form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']?>" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber']?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <!-- <input type="text" class="form-control" name="address" style="height: 130px;"   value="<?php echo $row['address']?>" required> -->
                <textarea name="address" cols="30" rows="10" class="form-control" style="height: 130px;padding:10px;" required><?php echo htmlspecialchars($row['address']); ?></textarea>
            </div>
            <?php
            }
            ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="index.php?p=manageuser" class="btn btn-primary">Back to Manage User</a>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>