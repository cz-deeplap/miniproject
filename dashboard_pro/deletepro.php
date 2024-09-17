<?php

    include_once('dashboard_pro/functionsproduct.php');

    if (isset($_GET['del'])) {
        $proid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($proid);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_pro/managepro'</script>";
        }
    }
 
?>