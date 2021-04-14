<?php 

include("functions/main.php");
include("functions/functions.php");
logout();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Clearance</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
   </head>
<body>
    <div id="wrapper">
        <?php include('inc/nav.php');?>
        <?php include('inc/side.php');?>

            <?php
                $page=$_GET['id'];
                if($page=='studentHome'){
                    include("studentHome.php");
                }else if($page=='studentAccount'){
                    header("location:studentAccount.php");
                }
            ?>
    </div>

    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
    <script src="assets/scripts/jquery.min.js"></script>
        <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    


</body>

</html>
