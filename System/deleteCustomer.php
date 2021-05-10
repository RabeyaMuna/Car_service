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

$conn = mysqli_connect('localhost', 'root', '', 'Car_service');
$id = $_REQUEST['id'];
print($id);
$query = "DELETE FROM `users` WHERE `user_id`=$id"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
header("Location: admin_edit_customerList.php"); 

?>