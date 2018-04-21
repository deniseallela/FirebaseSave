<?php 
	//Connect to the Db
$db= mysqli_connect("localhost","root","","ios");
	//Register User
if (isset($_POST['reg_user'])) {
		//Recieve all inputs from the registration form
	extract($_POST);
	$name_1 = mysqli_real_escape_string($db,$_POST['name_1']);
	$name_2 = mysqli_real_escape_string($db,$_POST['name_2']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		//Validation
		//Ensure that the form is correctly filled.
		//Use array_push() to get the corresponding error to $errors
	if (empty($name_1)||empty($name_2)) {
		header("Location: ../account.php?Full Name Required");
	}elseif
	(empty($email)){ 
		header("Location: ../account.php?email is required");
		
	}elseif (empty($password_1)) {
		header("Location: ../account.php?Password is required");
	}elseif
	(empty($password_2)){ 
		header("Location: ../account.php?Confirm Password is required");
	}elseif ($password_1 !=$password_2){ 
		header("Location: ../account.php?The two passwords do not match");
	}else{

		$user_check_query = "select * from users where email='$email'";
		$result = mysqli_query($db,$user_check_query);
		$resultCheck = msyqli_num_rows($result);
		if ($resultCheck > 0) {
			header("location: ../account.php?Email already exists");
			exit();
		}else{
			$hashedPwd = password_hash($password_2, PASSWORD_DEFAULT);
			$query = "INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES (NULL, '$name_1', '$name_2', '$email', '$password_2')";
			mysqli_query($db,$query);
			header("Location: ../cart.php");
		}

		
	}


	
}else{	
	header("Location: ../account.php");
	exit();
}
		//Check the Db to make sure the user doesn't exist with the username and/or password

		//Finally Register the user if there are no errorsin the form


if (isset($_POST['login_user'])) {
			# code...
	extract($_POST);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);


	if (empty($email)) {
				# code...
		arrray_push($errors,"Email Is Required");
	}
	if (empty($password)) {
				# code...
		array_push($errors,"Password Is Required");
	}
			// check if there are no errors in the form then login the user
	if (count($errors=0)) {
				# code...
		$password=md5($password);
		$query = "select * from users where email='$email' and password='$password'";
		$result=mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['email']=$email;
			$_SESSION['success']="You are now logged in";
			header("location:shop.php");
		}else{
			array_push($errors, "Wrong Username/Password combination");
		}
	}
}else{
	header("Location: ../login.php");
}

?>