<?php 
include("../connect.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMU | ADMIN LOGIN</title>
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
                        <h3 class="panel-title">Administrator Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" type="text" autofocus name="a_name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" value="" name="a_pass">
                                </div>
                                <button class="btn btn-lg btn-success btn-block" name="submita">Login</button>
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
session_start();
   if(isset($_POST['submita'])){
        $p_email=mysqli_real_escape_string($con,$_POST['a_name']);
        $p_pass=mysqli_real_escape_string($con,$_POST['a_pass']);
        
        $emailcount=0;
        $checkemail="select * from admin where adm_name='$p_email'";
        $execute=mysqli_query($con,$checkemail);
        $emailcount=mysqli_num_rows($execute);
        if($emailcount>0){
            while($row_pass=mysqli_fetch_array($execute)){
                $u_name=$row_pass['adm_name'];
                $hashpass=$row_pass['adm_pass'];
                $hash=password_verify($p_pass,$hashpass);

                if($hash==0){
                    echo '<script>alert("Incorrect Password!"); window.location="login.php"</script>';
                }else{
                    $_SESSION['adm_id'] = $row_pass['id'];
                    echo '<script>alert("Welcome Onboard '.$u_name.' .You are now the boss."); window.location="index.php?id=home"</script>';
                }
            }
        }else{
            echo '<script>alert("Incorrect User Name!"); window.location="login.php"</script>';
        }
    
}
?>
