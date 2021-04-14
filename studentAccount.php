<?php 
session_start();
if(isset($_SESSION['student_id'])){
	
}else{
	echo "<script>window.location='studentLogin.php'</script>";
}
include("connect.php");
include("functions/main.php");
include("functions/functions.php");
logout();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['student_id']?> | OSCS</title>
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
            $reg = $_SESSION['student_id'];
                    $usercount=0;
                    $checkuser="select * from students where regNumber='$reg'";
                    $execute=mysqli_query($con,$checkuser);
                    $usercount=mysqli_num_rows($execute);
                    if($usercount == 1){
                        while($row_pass=mysqli_fetch_array($execute)){
                            $firstname=$row_pass['firstName'];
                            $lastname=$row_pass['lastName'];
                            $email=$row_pass['email'];
                        }
                    }else{
                        echo '<script>alert("Student does not exist in our database!"); window.location="studentRegister.php"</script>';
                    }
            ?>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Your Details</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input class="form-control" value="<?php echo $firstname?>" type="text" id="firstname"  name="first_name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input class="form-control" value="<?php echo $lastname?>" type="text" id="lastname" name="last_name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control"  value="<?php echo $email?>" type="text" id="email" name="email">
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
$reg = $_SESSION['student_id'];
   if(isset($_POST['update'])){
        $first=mysqli_real_escape_string($con,$_POST['first_name']);
        $last=mysqli_real_escape_string($con,$_POST['last_name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
       
        
        $usercount=0;
        $checkuser="select * from students where regNumber='$reg'";
        $execute=mysqli_query($con,$checkuser);
        $usercount=mysqli_num_rows($execute);
        if($usercount>0){
             $updaterecord = "UPDATE students SET firstName = '$first', lastName = '$last', email = '$email' WHERE regNumber = '$reg'" ;
            $execute=mysqli_query($con,$updaterecord);
             if(!$execute){
                    echo '<script>alert("Update Failed! Please try again"); window.location="studentAccount.php?id=studentAccount"</script>';
                }else{
                    echo '<script>alert("Details Successfully updated"); window.location="studentAccount.php?id=studentAccount"</script>';
                }
            }
        else{
            echo '<script>alert("How did you even manage to bypass my security??..Nakuitia polisi wewe!"); window.location="studentLogin.php"</script>';
        }
   } 
?>