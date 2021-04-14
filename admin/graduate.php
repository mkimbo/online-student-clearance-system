<?php
	include("../connect.php");
		$reg=$_GET['id'];
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
			echo '<script>alert("Error!! Student has not cleared in all departments!!"); window.location="index.php?id=users"</script>';
		} else {
			$graduate=mysqli_query($con,"update students set status='1' where regNumber ='$reg'");
            if($graduate)
            {
                echo '<script>alert("Student added to graduation list"); window.location="index.php?id=users"</script>';
            }
            else
            {
                echo '<script>alert("Error!! Please Try Again!!"); window.location="index.php?id=users"</script>';
            }
		}
?>