<?php
require 'config.php';

$sql = "delete from users where id=4";
$delete = $conn->query($sql);

if($delete === TRUE) {
	echo "Successfully Deleted";
} else {
	echo "Error: " . $conn->error;
}