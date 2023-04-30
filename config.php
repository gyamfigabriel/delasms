<?php
include('dbcon.php');

// check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
	// retrieve the values submitted by the user
	$username = $_POST['username'];
	$password = $_POST['password'];

	// create a query to check if the username and password are correct
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db, $query);

	// check if the query returned any rows
	if (mysqli_num_rows($result) == 1) {
		// the login was successful, redirect the user to the home page
		header('Location: sms/index.php');
	} else {
		// the login was not successful, show an error message
		echo "Incorrect username or password.";
	}
}

?>