<?php
session_start();
include("../connect.php");
if(isset($_SESSION['adm_id'])){
	
}else{
	echo "<script>window.location='login.php'</script>";
}

function adm_name(){
	global $con;
	$id=$_SESSION['adm_id'];
	$get_cats = "select * from admin where id='$id'";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_pro=mysqli_fetch_array($run_cats)){
		$oname=$row_pro['adm_name'];
	}
	echo "$oname";
}
function fetch($table){
	global $con;
	$i=0;
	$get_cats = "select * from $table where status = 2";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_cats=mysqli_fetch_array($run_cats)){
		$i++;
		$id=$row_cats['id'];
		$reg=$row_cats['regNumber'];
		$name=$row_cats['firstName'];
		$year=$row_cats['year'];
		$faculty=$row_cats['faculty'];
		$count=0;
		$tables=array("dos","examination","finance","library");
		foreach ($tables as $key) {
			$sql0="select status from $key where regNumber='$reg'";
			$del0=mysqli_query($con,$sql0);
			$row_dogs=mysqli_fetch_array($del0);
			$clearance=$row_dogs['status'];
			if($clearance == 1) {
				$count++;
			}
		}
		$percentage=($count/4) * 100;
		$percentage=ceil($percentage);
		if($percentage<100) {
			$color = "danger";
			$status= "Not Cleared";
			$icon = "fa fa-times";
		} else {
			$color = "success";
			$status= "Cleared";
			$icon = "fa fa-check";
		}
		
	echo "	
			 <tr class='$color'>
                <td>$i</td>
                <td>$name</td>
                <td>$reg</td>
                <td>$faculty</td>
                <td>$status</td>
				<td>$percentage%</td>
                <td><a href='graduate.php?id=$reg'><button class='btn btn-$color'><i class='$icon fa-fw'></i>Graduate</button></a></td>
            </tr>

	";
	}
}
function graduation($table){
	global $con;
	$get_cats = "select * from $table where status = 1";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_cats=mysqli_fetch_array($run_cats)){
		$id=$row_cats['id'];
		$reg=$row_cats['regNumber'];
		$fname=$row_cats['firstName'];
		$lname=$row_cats['lastName'];
		$faculty=$row_cats['faculty'];
		
	echo "	
			 <tr>
                <td>$id</td>
                <td>$reg</td>
				<td>$fname $lname</td>
                <td>$faculty</td>
                
                
            </tr>

	";
	}
}
function fetchMain(){
	global $con;
	$i=0;
	$table=$_GET['id'];
	$get_table = "select * from $table";
	$execute = mysqli_query($con, $get_table);
	while($row_table=mysqli_fetch_array($execute)){
		$i++;
		$id=$row_table['id'];
		$reg=$row_table['regNumber'];
		$status=$row_table['status'];
		$basket=$row_table['basket'];
		$pay=$row_table['fee'];
		
		if ($table=='dos' || $table=='examination' || $table=='registrar') {
			$fee="N/A";
		}else{$fee=$pay;}
		if ($status==2) {
			$color="danger";
			$clearance_status="Not Cleared";
		}else{$clearance_status="Cleared";
				$color="success";
			}
		if ($basket=="") {
			$clearance_issue="None Recorded";
		}else{$clearance_issue=$basket;}
	echo "	
			 <tr class='$color'>
                <td>$i</td>
                <td>$reg</td>
                <td>$clearance_status</td>
                <td>$clearance_issue</td>
				<td>$fee</td>
				<td><a href='edit.php?id=$reg&tbl=$table'><button class='btn btn-info'>Edit</button></a></td>
				<td><a href='clear.php?id=$reg&tbl=$table'><button class='btn btn-success'>Clear</button></a></td>
                
            </tr>

	";
	}
}
/*function fetchadmin(){
	global $con;
	$i=0;
	$get_cats = "select * from cont";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_cats=mysqli_fetch_array($run_cats)){
		$i++;
		$id=$row_cats['adm_id'];
		$name=$row_cats['adm_name'];
		
		
	echo "	
			 <tr>
                <td>$i</td>
                <td>$name</td>
                <td><a href='delete.php?id=$id&tbl=cont'><button class='btn btn-danger'><i class='fa fa-times fa-fw'></i>Delete</button></a></td>
            </tr>

	";
	}
}*/


?>