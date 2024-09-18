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
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-1">
    <h1 class="information-heading">manage user</h1>
    <hr>
        <table id="mytable" class="table" style="text-align: center;">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Posting Date</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phonenumber']; ?></td>
                        <td><?php echo $row['address']; ?></td> 
                        <td><?php echo $row['postingdate']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                        <a href="index.php?p=dashboard_user/updateuser&id=<?php echo $row['id']; ?>" class="">
                            <ion-icon name="create-outline" style="width: 20px; padding: 0 0px 0 20px; color: #0042dd;;"></ion-icon></a>
                        <a href="index.php?p=dashboard_user/deleteuser&del=<?php echo $row['id']; ?>" class="">
                            <ion-icon name="trash-outline" style="width: 20px; padding: 0 15px 0 13px; color: #ff0000ab"></ion-icon></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body>
</html>