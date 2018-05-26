<?php

$connection = mysqli_connect('localhost:3306', 'root', '', 'test');

if($connection == false) {
	echo 'Couldn\'t connect to the database';
	echo mysqli_connect_error();
	exit();
}