<?php 
	$username = "";
	$email = "";
	$errors = array();

	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'registration';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);		
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		if (empty($username)) {
			array_push($errors,"Username is required");
		}
		if (empty($email)) {
			array_push($errors,"Email is required");
	