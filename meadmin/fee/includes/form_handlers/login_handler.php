<?php	
//require "includes/config/config.php";
    $errorArray = array(); //error messages
	if(isset($_POST['login_button'])) {
		
		$username = $_POST['username'];

		$_SESSION['username'] = $username;
		$password =($_POST['password']);

		$check_database_query_email = mysqli_query($db_con, "SELECT * FROM users WHERE username='$username'");
		$check_database_query_email_password = mysqli_query($db_con, "SELECT * FROM users WHERE username='$username' AND password='$password'");


		$check_login_query_email = mysqli_num_rows($check_database_query_email);
		$check_login_query_email_password = mysqli_num_rows($check_database_query_email_password);

		if($username==""){
			array_push($errorArray, "Please enter your email.", "Welcome!");
		}
		else if($_POST['password']==""){
			array_push($errorArray, "Please enter your password.");
		}
		
		else if($check_login_query_email == 0){
			array_push($errorArray, "Given Username is not registered.");
		}
		else if($check_login_query_email_password == 1){
			$row = mysqli_fetch_array($check_database_query_email_password);
			$username = $row['username'];

			$_SESSION['username'] = $username;
			header('Location: index.php');
			exit();

		}
		else {
			array_push($errorArray, "Incorrect Password.");
		}
	}
	else if(!isset($_POST['login_button'])) {
		array_push($errorArray, "Welcome!");
	}
?>