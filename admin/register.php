<?php 
include("../connect.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMU | ADMIN REGISTER</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
      <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
               <!--<img src="../img/logo.png">-->
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">ADD ADMIN</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" type="text" autofocus name="aa_name" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" value="" name="aa_pass" required="">
                                </div>
                                <button class="btn btn-lg btn-success btn-block" name="submitaa">ADD</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
<?php 
   global $con;
   if(isset($_POST['submitaa'])){
        $p_name=mysqli_real_escape_string($con,$_POST['aa_name']);
        $p_pass=mysqli_real_escape_string($con,$_POST['aa_pass']);

    $count=0;
    $u_check="select * from admin where adm_name='$p_name'";
    $run_ucheck=mysqli_query($con,$u_check);
    $count=mysqli_num_rows($run_ucheck);

        if($count>0){
            echo "<script>alert('Username already chosen, kindly pick a different one.'); window.location='register.php'</script>";
        }else{
            $encrypt_pass=password_hash($p_pass, PASSWORD_DEFAULT);
            $sql="insert into admin(adm_name,adm_pass) VALUES('$p_name','$encrypt_pass')";
            $run_sql=mysqli_query($con, $sql);
            if($run_sql){
                echo "<script>alert('Welcome...'); window.location='index.php?id=home'</script>";
            }else{
                echo "error";
            }
        }

    }
?>
