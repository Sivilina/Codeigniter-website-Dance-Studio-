<?php 
if(isset($_POST['name'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `styles` SET `name`='$name', `description`='$description' WHERE `id`='$id'";

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>