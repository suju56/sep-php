<?php 
$serverName = 'localhost';
$Username= 'root';
$password = '';
$dbName ='sep-php';
$conn = new mysqli($serverName, $Username, $password, $dbName);

if($conn->connect_error){
	die('Failed:' . $conn->connect_errors);
}
$sql = "select * from user";//SQLquery to fetch all data
$result = $conn->query($sql);//Executes the given Query

//echo "<pre>";
//print_r($result);//debugging

if ($result->num_row > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<pre>";
		print_r($row);
	}
}
$conn->close()
?>