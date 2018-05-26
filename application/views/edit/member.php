<?php 
if(isset($_POST['type'])) {
	$type = $_POST['type'];
	$price = $_POST['price'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `memberships` SET `type`='$type', `price`='$price' WHERE `id`='$id'";

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>