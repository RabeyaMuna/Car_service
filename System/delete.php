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


$con = mysqli_connect('localhost', 'root', '', 'Car_service');

if (isset($_POST['confirm_edit_button'])) {
  $mechanic_id = $_SESSION['mechanic_id'];
  $mechanic_name = $_POST['name'];
  $mech_username = $_POST['username'];
  $mech_password = $_POST['password'];
  $mech_speacility = $_POST['speciality'];
  
  $db = mysqli_connect('localhost', 'root', '', 'Car_service');
  $result = mysqli_query($db, "SELECT `mechanic_id` FROM `mechanics` WHERE `mechanic_id` = '$mechanic_id'")
    or die($query . "<br/><br/>" . mysqli_error($db));
  $row = mysqli_fetch_array($result);
  $mechanic_id = $row[0];


  //Requesting the edit update
  $query = "UPDATE `mechanics` SET `mechanic_name`='$mechanic_name', `mech_username`='$mech_username', `mech_password`='$mech_password', `mech_speacility`='$mech_speacility' WHERE `mechanic_id`='$mechanic_id'";
  if (mysqli_query($db, $query)) {
    $confirmation = "The mechanic info has been modified successfully.";
  } else {
    $confirmation = "Your request can't not be processed at the moment. Please try again.. ";
  }
  $_SESSION['confirmation'] = $confirmation;
  header('location: admin_edit_mechanicList.php');


}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image:url(Images/garage.jpg); width:100%; background-size: cover;">
  <div class="header" style="width: 40%;background-color: cadetblue;">
    <h2>Update Mechanic Info </h2>
  </div>
  <div class="content" style="width: 40%;">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php if (isset($_POST['edit_mechanic_button'])) : ?>

      <!-- Getting selected appointment data from DB -->
      <?php
      $mechanic_id = $_POST['radio_all_mechanics'];
      $_SESSION['mechanic_id'] = "$mechanic_id";

      $db = mysqli_connect('localhost', 'root', '', 'Car_service');
      $query =
        "SELECT * from mechanics";
   
      $result = mysqli_query($db, $query) or die($query . "<br/><br/>" . mysqli_error($db));

      while ($rows = mysqli_fetch_assoc($result)) {
        $username = $rows['mech_username'];
        $speciality = $rows['mech_speacility'];
        $password = $rows['mech_password'];
        $name = $rows['mechanic_name'];
        //print_r($rows);
      }
      ?>

      <!-- Top right nav bar -->
      <p style="float: right;">
        <a href="admin_index.php" style="color: blue; padding-right:20px;">All Appointments List</a>&nbsp;
        <a href="index.php?logout='1'" style="color: red;">Logout</a>
      </p><br>

      <!-- Appointment info div -->
      <!--<h3 text-align="center">-- Appointment Information --</h3> -->
      <form method="post" style="width: 80%; padding-top: 0px; padding-bottom: 5px;margin-top: 5px;margin-bottom: 20px; border-radius: 3px 3px 3px 3px; border: 1px solid black;">
        <div class="input-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>" >
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="text" name="password" value="<?php echo $password; ?>" >
        </div>
        <div class="input-group">
          <label>Speciality</label>
          <input type="text" name="speciality" value="<?php echo $speciality; ?>" >
        </div>

        <p>
          <input type=submit name="confirm_edit_button" value="Confirm Edit" style="width:40%; padding: 10px;margin-top: 5px;margin-bottom: 8px;">
        </p>
      </form>
    <?php endif ?>
  </div>

</body>

</html>