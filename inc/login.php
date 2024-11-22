<?php
ob_start();
session_start();


require  'config.php';


if ( !isset($_POST['username'], $_POST['password']) ) {
	
	$_SESSION['message'] = "Insert Both username and password!";
	header("Location: ../index.php");
}

if ($stmt = $con->prepare('SELECT id, password FROM account WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
         
    if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	if (password_verify($_POST['password'], $password)) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['message'] = $_POST['username'];
		$_SESSION['id'] = $id;
		$_SESSION['username'] = $username;

		echo 'Welcome ' . $_SESSION['message'] . '!';
        header("Location: ../home_page.php?login=success");
	} else {
		// Incorrect password
		$_SESSION['message'] = "Incorrect username and/or password!";
		header("Location: ../index.php");
		
	}
} else {
	// Incorrect username
	$_SESSION['message'] = "Incorrect username and/or password!";
	header("Location: ../index.php");
}

	$stmt->close();
}

