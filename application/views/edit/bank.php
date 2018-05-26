<?php 
if(isset($_POST['client_id'])) {
	$client = $_POST['client_id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$untilDate = $_POST['until_date'];
	$cvn = $_POST['cvn'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `banks` 
			SET `client_id`='$client', `name`='$name', `surname`='$surname', 
				`until_date`='$untilDate', `cvn`='$cvn' WHERE `id`='$id'";

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>