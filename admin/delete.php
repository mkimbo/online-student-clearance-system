<?php
	include("../connect.php");
		$id=$_GET['id'];
		$tbl=$_GET['tbl'];

		if ($tbl='new_student') {

			$tables=array("dept_dos","dept_examination","dept_finance","dept_hostel","dept_library","dept_registrar","dept_sports");
			foreach ($tables as $key) {
				$sql0="delete from $key where idnumber='$id'";
				$del0=mysqli_query($con,$sql0);
			}

			$sql="delete from $tbl where idnumber='$id'";
			$del=mysqli_query($con,$sql);

		}else{
			$sql="delete from dept_$tbl where incre='$id'";
			$del=mysqli_query($con,$sql);
		}
		
		if($del){
			if ($tbl='new_student') {
				echo "<script>alert('Student Deleted Successfully.');</script>";
				echo "<script>window.location='index.php?id=users'</script>";
			}else{
				echo "<script>alert('Deleted Successfully.');</script>";
				echo "<script>window.location='router.php?id=$tbl'</script>";
			}
		}
?>