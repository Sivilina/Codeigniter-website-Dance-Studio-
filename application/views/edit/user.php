<?php 
if(isset($_POST['username'])) {
	$username = $_POST['username'];
	$fullName = $_POST['full_name'];
	$role	 = $_POST['role'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `users` 
			SET `username`='$username', `full_name`='$fullName', `role`='$role',  WHERE `users`.`id` = '$id'";

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>