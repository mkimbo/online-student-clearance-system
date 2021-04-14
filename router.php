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
    <title><?php $table=$_GET['id']; echo "$table | OSCS";?></title>
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

           <div id="page-wrapper">
<?php include('inc/head.php');
?>
<div class="row">
    <div class="col-lg-12">
        
       
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> <?php $table=$_GET['id']; echo "<b style='text-transform:uppercase;color:#000;'>$table</b>";?> DEPARTMENT
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php fetchDepartment();?>
                    </div>

                </div>

                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>

    </div>
</div>


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
