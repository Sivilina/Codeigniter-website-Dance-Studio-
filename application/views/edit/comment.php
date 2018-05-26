<?php 
if(isset($_POST['date'])) {
	$date = $_POST['date'];
	$context	 = $_POST['context'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `comments` 
			SET `date`='$date', `context`='$context',  WHERE `id`='$id'";

	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>