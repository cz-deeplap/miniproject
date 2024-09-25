<?php
include_once('dashboard_user/functionsuser.php');
$fetchdata = new DB_con();
$sql = $fetchdata->fetchdata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="dashboard_user/css/style_update.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-1">
    <div class="user-container">
        <?php while ($row = mysqli_fetch_array($sql)) { ?>
            <div class="user-card">
                <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="User Image">
                <div class="user-card-2">
                    <p><strong>Username : </strong><?php echo htmlspecialchars($row['username']); ?></p>
                    <p><strong>Name : </strong><?php echo htmlspecialchars($row['firstname']); ?> <?php echo htmlspecialchars($row['lastname']); ?></p> 
                    <p><strong>Email : </strong><?php echo htmlspecialchars($row['email']); ?></p>
                    <p><strong>Tel : </strong><?php echo htmlspecialchars($row['phonenumber']); ?></p>
                </div>
                <div class="user-actions">
                    <a style="width: 435px; font-size: 18px;" href="index.php?p=dashboard_user/updateuser&id=<?php echo $row['id']; ?>" class="btn btn-dark">Edit</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
