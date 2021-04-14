<?php
include("connect.php");
function ip(){
	$client= @$_SERVER['HTTP_CLIENT_IP'];
	$forward= @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote= @$_SERVER['REMOTE_ADDR'];

	if (filter_var($client,FILTER_VALIDATE_IP)) {
		$ip_addr=$client;
	}elseif (filter_var($forward,FILTER_VALIDATE_IP)) {
		$ip_addr=$forward;
	}else{
		$ip_addr=$remote;
	}
	return $ip_addr;
}


function admCount(){
	global $con;
	$count=0;
	$sql="select * from cont";
	$run=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run);
	echo $count;
}

function logout(){
	global $con;
	if(isset($_POST['submit1'])){
		session_destroy();
		echo '<script>alert("Goodbye.!"); window.location="login.php"</script>';
}
}
function submit_logout(){
	global $con;
	if(isset($_POST['submit_logout'])){
		session_destroy();
		echo '<script>alert("Goodbye.!"); window.location="studentLogin.php"</script>';
}
}
function login(){
	global $con;

	if(isset($_POST['submita'])){
		$p_email=mysqli_real_escape_string($con,$_POST['a_name']);
		$p_pass=mysqli_real_escape_string($con,$_POST['a_pass']);
		
		$emailcount=0;
		$checkemail="select * from cont where adm_name='$p_email'";
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
					$_SESSION['adm_id'] = $row_pass['adm_id'];
					echo '<script>alert("Welcome Onboard '.$u_name.' .You are now the boss."); window.location="index.php"</script>';
				}
			}
		}else{
			echo '<script>alert("Incorrect User Name!"); window.location="login.php"</script>';
		}
	
}
}
function register(){
	global $con;
	if(isset($_POST['submitaa'])){
		$p_name=mysqli_real_escape_string($con,$_POST['aa_name']);
		$p_pass=mysqli_real_escape_string($con,$_POST['aa_pass']);

	$count=0;
	$u_check="select * from cont where adm_name='$p_name'";
	$run_ucheck=mysqli_query($con,$u_check);
	$count=mysqli_num_rows($run_ucheck);

		if($count>0){
			echo "<script>alert('Username already chosen, kindly pick a different one.'); window.location='register.php'</script>";
		}else{
			$encrypt_pass=password_hash($p_pass, PASSWORD_DEFAULT);
			$sql="insert into cont(adm_name,adm_pass) VALUES('$p_name','$encrypt_pass')";
			$run_sql=mysqli_query($con, $sql);
			if($run_sql){
				echo "<script>alert('Welcome'); window.location='index.php'</script>";
			}
		}

	}
}






?>