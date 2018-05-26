<?php 
if(isset($_POST['date'])) {
	$date = $_POST['date'];
	$title = $_POST['title'];
	$context	 = $_POST['context'];
	$id = $_POST['id'];

	$connection = mysqli_connect('localhost:3306', 'root', '', 'test');
	$sql = "UPDATE `posts` 
			SET `date`='$date', `title`='$title', `context`='$context'  WHERE `posts`.`id`='$id'";
	if ($connection->query($sql) === TRUE) {
	    echo "<script> window.location.href = \"".base_url()."index.php/admin/admin_tables\"; </script>";
	} else {
	    echo "Error deleting record: " . $connection->error;
	}
}
?>