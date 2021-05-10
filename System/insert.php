<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

 if (isset($_POST['submit'])) {
	 $name = $_POST['mechanic_name'];
	 $username = $_POST['mech_username'];
	 $password = $_POST['mech_password'];
	 $speciality = $_POST['mech_speacility'];



	$conn = mysqli_connect('localhost', 'root', '', 'Car_service');

	$sql = "INSERT INTO `mechanics` (`mechanic_id`, `mechanic_name`, `mech_username`, `mech_password`, `mech_speacility`) VALUES ('', '$name', '$username', '$password', '$speciality')";

	$run = mysqli_query($conn, $sql);

	if ($run == TRUE) {
      $confirmation = "The mechanic info has been added successfully.";
    } else {
      $confirmation = "Your request can't not be processed at the moment. Please try again.. ";
    }
    $_SESSION['confirmation'] = $confirmation;
    header('location: admin_edit_mechanicList.php');

}

?>