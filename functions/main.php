<?php
session_start();
if(isset($_SESSION['student_id'])){
	
}else{
	echo "<script>window.location='studentLogin.php'</script>";
}
include("connect.php");

function student_details(){
	global $con;
	$id=$_SESSION['student_id'];
	$get_cats = "select * from students where regNumber='$id'";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_pro=mysqli_fetch_array($run_cats)){
		$name=$row_pro['firstName'];
		$lname=$row_pro['lastName'];
		$number=$row_pro['regNumber'];
		$faculty=$row_pro['faculty'];
	}
	echo "
		<div>
			<p ><img src='assets/img/user.jpg' alt='student'></p>
			<p>NAME :$name $lname</p>
			<p>REG. NO. : $number</p>
			<p>COURSE : $faculty</p>
		</div>
	
	";
}
function student_name(){
	global $con;
	$id=$_SESSION['student_id'];
	$get_cats = "select * from students where regNumber='$id'";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_pro=mysqli_fetch_array($run_cats)){
		$fname=$row_pro['firstName'];
	}
	echo "$fname";
}
function student_status(){
	global $con;
	$id=$_SESSION['student_id'];
	$get_cats = "select * from students where regNumber='$id'";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_pro=mysqli_fetch_array($run_cats)){
		$status=$row_pro['status'];
	}
	if($status == 1){
	echo '<span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Cleared';
	} else {
	echo '<span class="user-circle-online btn btn-danger btn-circle "></span>&nbsp;Not Cleared';
	}
}
function fetch($table){
	global $con;
	$i=0;
	$get_cats = "select * from $table";
	$run_cats = mysqli_query($con, $get_cats);
	while($row_cats=mysqli_fetch_array($run_cats)){
		$i++;
		$id=$row_cats['incre'];
		$idnum=$row_cats['idnumber'];
		$name=$row_cats['name'];
		$residence=$row_cats['residence'];
		$faculty=$row_cats['faculty'];
		
	echo "	
			 <tr>
                <td>$i</td>
                <td>$name</td>
                <td>$idnum</td>
                <td>$faculty</td>
                <td>$residence</td>
                <td><a href='delete.php?id=$idnum&tbl=".$table."'><button class='btn btn-danger'><i class='fa fa-times fa-fw'></i>REMOVE</button></a></td>
            </tr>

	";
	}
}
function examinationStatus(){
	global $con;
	$id=$_SESSION['student_id'];
	$i=0;
	$get_exam = "select * from examination where regNumber='$id'";
	$run_query = mysqli_query($con, $get_exam);
	$data=mysqli_fetch_array($run_query);
	$clearancestatus=$data['status'];
	$basket=$data['basket'];
	if($clearancestatus==1)
	{
		$status="success";
		$clearancetext="Cleared";
		$glyphicon="fa fa-check";
		$count++;
	}
	else
	{
		$status="danger";
		$clearancetext="Not Cleared";
		$glyphicon="fa fa-times";
	}
	if($basket=="" && $clearancestatus==2)
	{
		$baskettext="please wait for clearance";
	}
	else if($basket=="" && $clearancestatus==1)
	{
		$baskettext="no issue";
	}
	else {
		$baskettext=$basket;
	}	
	echo "	
			 <tr class='$status'>
				<td>Examinations</td>
				<td>$clearancetext</td>
				<td>$baskettext</td>
				<td><i class='$glyphicon'></i></td>
			</tr>

	";
}

function libraryStatus(){
	global $con;
	$id=$_SESSION['student_id'];
	$i=0;
	$get_library = "select * from library where regNumber='$id'";
	$run_query = mysqli_query($con, $get_library);
	$data=mysqli_fetch_array($run_query);
	$clearancestatus=$data['status'];
	$basket=$data['basket'];
	if($clearancestatus==1)
	{
		$status="success";
		$clearancetext="Cleared";
		$glyphicon="fa fa-check";
		$count++;
	}
	else
	{
		$status="danger";
		$clearancetext="Not Cleared";
		$glyphicon="fa fa-times";
	}
	if($basket=="" && $clearancestatus==2)
	{
		$baskettext="please wait for clearance";
	}
	else if($basket=="" && $clearancestatus==1)
	{
		$baskettext="no issue";
	}
	else {
		$baskettext=$basket;
	}	
	echo "	
			 <tr class='$status'>
				<td>Library</td>
				<td>$clearancetext</td>
				<td>$baskettext</td>
				<td><i class='$glyphicon'></i></td>
			</tr>

	";
}
function financeStatus(){
	global $con;
	$id=$_SESSION['student_id'];
	$i=0;
	$get_finance = "select * from finance where regNumber='$id'";
	$run_query = mysqli_query($con, $get_finance);
	$data=mysqli_fetch_array($run_query);
	$clearancestatus=$data['status'];
	$basket=$data['basket'];
	if($clearancestatus==1)
	{
		$status="success";
		$clearancetext="Cleared";
		$glyphicon="fa fa-check";
		$count++;
	}
	else
	{
		$status="danger";
		$clearancetext="Not Cleared";
		$glyphicon="fa fa-times";
	}
	if($basket=="" && $clearancestatus==2)
	{
		$baskettext="please wait for clearance";
	}
	else if($basket=="" && $clearancestatus==1)
	{
		$baskettext="no issue";
	}
	else {
		$baskettext=$basket;
	}	
	echo "	
			 <tr class='$status'>
				<td>Finance</td>
				<td>$clearancetext</td>
				<td>$baskettext</td>
				<td><i class='$glyphicon'></i></td>
			</tr>

	";
}
function DeanStatus(){
	global $con;
	$id=$_SESSION['student_id'];
	$i=0;
	$get_dos = "select * from dos where regNumber='$id'";
	$run_query = mysqli_query($con, $get_dos);
	$data=mysqli_fetch_array($run_query);
	$clearancestatus=$data['status'];
	$basket=$data['basket'];
	if($clearancestatus==1)
	{
		$status="success";
		$clearancetext="Cleared";
		$glyphicon="fa fa-check";
		$count++;
	}
	else
	{
		$status="danger";
		$clearancetext="Not Cleared";
		$glyphicon="fa fa-times";
	}
	if($basket=="" && $clearancestatus==2)
	{
		$baskettext="please wait for clearance";
	}
	else if($basket=="" && $clearancestatus==1)
	{
		$baskettext="no issue";
	}
	else {
		$baskettext=$basket;
	}	
	echo "	
			 <tr class='$status'>
				<td>Dean of Students</td>
				<td>$clearancetext</td>
				<td>$baskettext</td>
				<td><i class='$glyphicon'></i></td>
			</tr>

	";
}
function fetchDepartment(){
	global $con;
	$i=0;
	$id=$_SESSION['student_id'];
	$table=$_GET['id'];
	$get_details = "select * from $table where regNumber='$id'";
	$execute = mysqli_query($con, $get_details);
	$data=mysqli_fetch_array($execute);
	$basket=$data['basket'];
	$status=$data['status'];
	$fee=$data['fee'];
	if ($table=='dos' || $table=='examination') {
			$pay="N/A";
		}else{$pay=$fee;}
	if($basket=='' && $status==1)
	{
		echo "<h3>You have been successfully cleared in this department</h3>";
	}
	else if($basket=='' && $status==2)
	{
		echo "<h3>Your clearance request is being processed. Patience is a virtue!! </h3>";
	}
	else 
	{
		echo "
				<div class='table-responsive'>
					<table class='table table-bordered table-hover table-striped' >
						<thead>
							<tr>
								<th>REGISTRATION NUMBER</th>
								<th>ISSUES</th>
								<th>TO PAY</th>
							</tr>
						</thead>
							<tbody>
								<tr class='danger'>
									<td>$id</td>
									<td>$basket</td>
									<td>$pay</td>
								</tr>
							</tbody>
					</table>
                </div>
			";
			
	}
}
function payment(){
	global $con;
	$i=0;
	$id=$_SESSION['student_id'];
	$table=$_GET['id'];
	$get_details = "select * from $table where regNumber='$id'";
	$execute = mysqli_query($con, $get_details);
	$data=mysqli_fetch_array($execute);
	$basket=$data['basket'];
	$status=$data['status'];
	$fee=$data['fee'];
	if ($table=='dos' || $table=='examination') {
			$pay="N/A";
		}else{$pay=$fee;}
	echo "
									<div id='payment'>
										<h4>Payment Options</h4>
											<button id='myBtn' style='margin-right: 10px; width: 100px; height:50px; background:url(../images/airtel.png);'></button><br></br>
												<div id='myModal' class='modal'>
												  <div class='modal-content'>
												    <span class='close'>&times;</span>
												    <h3 style='text-align: center; border-bottom: solid 1px #c6d8f2;'>Airtel Money payment Instructions</h3>
												    <p>1. Go to the <strong>Airtel Money</strong> menu and select <strong>Make Payments</strong> </p>
												    <p>2. Select <strong>Paybill</strong>.</p>
												    <p>3. Scroll down and select<strong> 'Other'</strong>.</p>
												    <p>4. In the Business Name section, type in the Paybill Number: <strong>XXXXXX</strong> </p>
												    <p>5. Enter the Amount to pay i.e <strong>".$pay."</strong></p>
												    <p>6. Enter your PIN number.</p>
												    <p>7. Wait for an Airtel money confirmation message and enter the details in the section below.</p>
												  </div>
												</div>
											<button id='myBtn1' style='margin-right: 10px; width: 100px; height:50px; background:url(../images/mpesa.png);'></button><br></br>
												<div id='myModal1' class='modal1'>
												  <div class='modal-content'>
												    <span class='close1'>&times;</span>
												    <h3 style='text-align: center; border-bottom: solid 1px #c6d8f2;'>MPESA payment Instructions</h3>
												    <p>1. Go to the <strong>LIPA na MPESA</strong> menu and select <strong>PAYBILL</strong> </p>
												    <p>2. Business Number Enter: <strong>XXXXXX</strong></p>
												    <p>3. Account Number Enter: <strong>clearMMU</strong></p>
												    <p>4. Enter the Amount to pay i.e <strong>".$pay."</strong></p> </p>
												    <p>5. Enter your PIN number.</p>
												    <p>6. Wait for an Mpesa confirmation message and enter the details in the section below.</p>

												  </div>
												</div>
											<button id='myBtn2' style='margin-right: 10px; width: 100px; height:50px; background:url(../images/tkash.png);'></button><br></br>
												<div id='myModal2' class='modal2'>
												  <div class='modal-content'>
												    <span class='close2'>&times;</span>
												    <h3 style='text-align: center; border-bottom: solid 1px #c6d8f2;'>T-kash payment Instructions</h3>
												  	<p>1. Go to the <strong>T-kash</strong> menu and select <strong>Pay Bill</strong> </p>
												    <p>2. Enter Biller Number: <strong>XXXXXX</strong></p>
												    <p>3. Account Number Enter: <strong>clearMMU</strong></p>
												    <p>4. Enter the Amount to pay i.e <strong>".$pay."</strong></p> </p>
												    <p>5. Enter your T-kash PIN number.</p>
												    <p>6. Wait for a T-kash confirmation message and enter the details in the section below.</p>
												  </div>
												</div>
									</div>
										

									";
								echo "
									<div id='payment-info'>
										<h4>Payment Information</h4>
										<div id='lego-container'>
											<div class='lego'>
												<div class='lego2'>
													<label>Transaction Code:</label>
													<p><input type='text' name='username' required='required' /></p>
													
												</div>
												<div class='lego2'>
													<label>Registration No.:</label>
													<p><input type='text' name='username' required='required' /></p>
												
												</div>
												<div class='lego2'>
													<label>Payment Mode:</label>
													<p><select name='text' type='text' >
														<option>Airtel Money</option>
														<option>M-Pesa</option>
														<option>T-Kash</option>
													</select></p>
												</div>
											</div>
											<div class='lego'>
												<div class='lego2'>
													<p><input type='submit' value='Submit' style='height:30px;' /></p>
												</div>
												<div class='lego2'>
													<label>Amount payable:</label>
													<p><input type='text' name='username' required='required' /></p>
												
												</div>
												<div class='lego2'>
													<label>Mobile Phone No.:</label>
													<p><input type='text' name='username' required='required' /></p>
												</div>
											</div>
										</div>
									</div>


									";
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