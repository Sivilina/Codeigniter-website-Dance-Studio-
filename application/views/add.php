<?php 
if(isset($_POST['name'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "INSERT INTO `styles`(`name`, `description`) VALUES('$name', '$description')";	

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>