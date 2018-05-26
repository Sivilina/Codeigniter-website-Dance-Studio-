<?php 
if(isset($_GET['id'])) {
	$id = $_GET['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "DELETE FROM 'memberships' WHERE 'id' = '".$id."'";

	if ($connection->query($sql) === TRUE) {
	    // echo "Record deleted successfully";
	    echo '1';
	} else {
	    // echo "Error deleting record: " . $connection->error;
	    echo '0';
	}
}