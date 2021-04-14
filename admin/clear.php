<?php
	include("../connect.php");
		$reg=$_GET['id'];
		$table=$_GET['tbl'];

		$check=mysqli_query($con,"select * from $table where regNumber ='$reg' && basket=''");
        $count=mysqli_num_rows($check);
        if($count==1)
        {
            $update=mysqli_query($con,"update $table set status='1',basket='' where regNumber ='$reg'");
            if($update)
            {
                echo '<script>alert("Student Cleared Succesfully"); window.location="router.php?id='.$table.'"</script>';
            }
            else
            {
                echo '<script>alert("Student Not Cleared. Try Again!!"); window.location="router.php?id='.$table.'"</script>';
            }
        }
        else
        {
            echo '<script>alert("Error!!!! Student has uncleared issues"); window.location="router.php?id='.$table.'"</script>';
        } 
?>