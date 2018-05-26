<?php 
if(isset($_POST['full_name'])) {
	$fullname = $_POST['full_name'];
	$degree = $_POST['degree'];
	$phone = $_POST['phone'];
	$about = $_POST['about'];
	$twit = $_POST['twitter_login'];
	$facebook = $_POST['facebook_login'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `masters` 
			SET `full_name`='$fullname', `degree`='$degree', `phone`='$phone', 
			`about`='$about', `twitter_login`='$twit', `facebook_login`='$facebook' WHERE `id`='$id'";

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>