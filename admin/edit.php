<?php 
session_start();
if(isset($_SESSION['adm_id'])){
	
}else{
	echo "<script>window.location='login.php'</script>";
}
include("../connect.php");
include("functions/main.php");
include("functions/functions.php");
logout();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | OSCS Admin</title>
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

            <?php 
            global $con;
            $reg=$_GET['id'];
		    $table=$_GET['tbl'];
            $finder=mysqli_query($con,"select * from $table where regNumber='$reg'");
            $row_pass=mysqli_fetch_array($finder);
            $number=$row_pass['regNumber'];
            $issues=$row_pass['basket'];
            $pay=$row_pass['fee'];
            if ($table=='dos' || $table=='examination') {
                $fee="N/A";
                }else{
                    $fee=$pay;
                }
            ?>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Update details of <?php echo $number?> in <?php echo $table?> department</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <label for="issue">Clearance Issue</label>
                                    <input class="form-control" value="<?php echo $issues?>" id="issue" type="text"  name="issue" >
                                </div>
                                <div class="form-group">
                                    <label for="amount">Amount to pay</label>
                                    <input class="form-control" value="<?php echo $fee?>" type="text" id="amount" name="amount" >
                                </div>
            
                                <button class="btn btn-lg btn-success btn-block" name="update">Update</button>
                            </fieldset>
                        </form>
                    </div>
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
<?php 
global $con;
$reg=$_GET['id'];
$table=$_GET['tbl'];
   if(isset($_POST['update'])){
        $basket=mysqli_real_escape_string($con,$_POST['issue']);
        $fee=mysqli_real_escape_string($con,$_POST['amount']);
        $state2=2;
        $state1=1;

        if($table=='dos' || $table=='examination'){
            if($basket ==''){
            $updaterecord = "UPDATE $table SET basket='', `status` = '$state1' WHERE regNumber ='$reg'" ;
            $execute=mysqli_query($con,$updaterecord);
             if(!$execute){
                    echo '<script>alert("Update Failed! Please try again"); window.location="edit.php?id='.$reg.'&tbl='.$table.'"</script>';
                }else{
                    echo '<script>alert("Update Successfull!!"); window.location="router.php?id='.$table.'"</script>';
                }
            } else {
                $updaterecord = "UPDATE $table SET basket='$basket', `status`='$state2' WHERE regNumber ='$reg'" ;
                $execute=mysqli_query($con,$updaterecord);
                if(!$execute){
                    echo '<script>alert("Update Failed! Please try again"); window.location="edit.php?id='.$reg.'&tbl='.$table.'"</script>';
                }else{
                    echo '<script>alert("Update Successfull!!"); window.location="router.php?id='.$table.'"</script>';
                }
            }
            }
        else{
            if($basket =='') {
                $updaterecord = "UPDATE $table SET  basket ='',`status` ='$state1', fee =0 WHERE regNumber ='$reg'" ;
                $execute=mysqli_query($con,$updaterecord);
             if(!$execute){
                    echo '<script>alert("Update Failed! Please try again"); window.location="edit.php?id='.$reg.'&tbl='.$table.'"</script>';
                }else{
                    echo '<script>alert("Update Successfull!!"); window.location="router.php?id='.$table.'"</script>';
                
                }
            } else {
                $updaterecord = "UPDATE $table SET  basket='$basket', `status` ='$state2', fee='$fee' WHERE regNumber ='$reg'" ;
                $execute=mysqli_query($con,$updaterecord);
             if(!$execute){
                    echo '<script>alert("Update Failed! Please try again"); window.location="edit.php?id='.$reg.'&tbl='.$table.'"</script>';
                }else{
                    echo '<script>alert("Update Successfull!!"); window.location="router.php?id='.$table.'"</script>';
                
                }
            }
        }
   } 
?>

















