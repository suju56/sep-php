<?php
require 'config.php';

$sql = "select * from users"; //SQL query to fetch all data
$result = $conn->query($sql); //Executes the given query

// echo "<pre>";
// print_r($row); //debugging

if($result->num_rows > 0) {
	//fetches the value one by one from the query 
	while($row = $result->fetch_assoc()) { 
		echo "id: " . $row["id"] . "<br>name: " . $row["name"] . "<br>";
		// echo "id: $row["id"] <br> name: $row["name"] <br>";
	}
} else {
	echo "There is no data available";
}


$conn->close();