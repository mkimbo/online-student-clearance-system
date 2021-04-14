 <?php
error_reporting(E_ERROR);
$con=mysqli_connect("localhost","root","","oscs");
if($con)
{

}
else
{
	echo"database connectivity not successful";
}



/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearance1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("database connectivity not successful: " . $conn->connect_error);
*/
