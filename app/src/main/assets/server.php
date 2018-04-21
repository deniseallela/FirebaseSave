<?php  
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db= mysqli_connect("localhost","root","","ios");
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  //mysqli_real_escape_string helps one to remove special characters i.e avoid injections 
  $name_1 = mysqli_real_escape_string($db,$_POST['name_1']);
  $name_2 = mysqli_real_escape_string($db,$_POST['name_2']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name_1)) { array_push($errors, "First Name is required"); }
  if (empty($name_2)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database


  	$query = "INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES (NULL, '$name_1', '$name_2', '$email', '$password_2')";
  	mysqli_query($db, $query);
  	  $_SESSION['email']=$email;
      $_SESSION['success']="You are now logged in";
  	     
  }
}
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);

  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header("location:shop.php");
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
  