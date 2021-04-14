<?php 
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSCS | REGISTER</title>
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
                        <h3 class="panel-title">Register to Clear Online</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="firstname" type="text" autofocus name="first_name" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="lastname" type="text" name="last_name" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Registration No." type="text"  name="reg_number" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" type="email" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" value="" name="password" required="">
                                </div>
                                <div class="form-group">
                                   <select class="form-control" name="year" type="text" placeholder="Year">
                                        <option selected>Choose your Year</option>
                                        <option>First-1st</option>
                                        <option>Second-2nd</option>
                                        <option>Third-3rd</option>
                                        <option>Fourth-4th</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                   <select class="form-control" name="faculty" type="text" placeholder="faculty">
                                        <option selected>Choose your Faculty</option>
                                        <option>Faculty of Computing and IT</option>
                                        <option>Faculty of Media and Arts</option>
                                        <option>Faculty of Science and Technology</option>
                                        <option>Faculty of Business and Economics</option>
                                    </select>
                                </div>
                                <button class="btn btn-lg btn-success btn-block" name="submitaa">Sign Up</button>
                                <p>Already have an account? Login <a href="studentLogin.php">Here</a></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
<?php 
session_start();
   global $con;
   
   if(isset($_POST['submitaa'])){
        $firstname=mysqli_real_escape_string($con,$_POST['first_name']);
        $lastname=mysqli_real_escape_string($con,$_POST['last_name']);
        $mail=mysqli_real_escape_string($con,$_POST['email']);
        $faculty=mysqli_real_escape_string($con,$_POST['faculty']);
        $reg=mysqli_real_escape_string($con,$_POST['reg_number']);
        $year=mysqli_real_escape_string($con,$_POST['year']);
        $password=mysqli_real_escape_string($con,$_POST['password']);

    $count=0;
    $u_check="select * from students where regNumber='$reg'";
    $run_ucheck=mysqli_query($con,$u_check);
    $count=mysqli_num_rows($run_ucheck);

        if($count>0){
            echo "<script>alert('User already exists, kindly login.'); window.location='studentLogin.php'</script>";
        }else{
                $encrypt_pass=password_hash($password, PASSWORD_DEFAULT);
                $sql="insert into students(lastName,firstName,faculty,email,year,regNumber,status,password) VALUES('$lastname','$firstname','$faculty','$mail','$year','$reg','2','$encrypt_pass')";
                $insertnew_student=mysqli_query($con, $sql);
                if($insertnew_student)
                    {
                        $insertlibrary=mysqli_query($con,"insert into library (regNumber,status,basket,fee) values ('$reg','2','','0')");
                        if($insertlibrary)
                        {
                            $insertdos=mysqli_query($con,"insert into dos (regNumber,status,basket) values ('$reg','2','')");
                            if($insertdos)
                            {
                                $insertfinance=mysqli_query($con,"insert into finance (regNumber,status,basket,fee) values ('$reg','2','','0')");
                                if($insertfinance)
                                {
                                    $insertexamination=mysqli_query($con,"insert into examination (regNumber,status,basket) values ('$reg','2','')");
                                    if($insertexamination)
                                    {
                                    session_start(); 
                                    echo "<script>alert('Welcome, you can now start the clearance process.'); window.location='index.php?id=studentHome'</script>";
                                    $_SESSION['student_id'] = $reg;                          
                                    }else{
                                        echo "error";
                                    }
                                }else {
                                    echo "error! Details not registered successfully";
                                }

                            }else {
                                echo "error! Details not registered successfully";
                            }
                        }else {
                            echo "error! Details not registered successfully";
                        }
                    }else {
                        echo "error! Details not registered successfully";
                    }
            }
         } else {
             "<script>alert('Please fill all values on the form...'); window.location='studentRegister.php?id=error'</script>"; 
         }
?>
