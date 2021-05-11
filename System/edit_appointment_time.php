<?php
session_start();

$mech_id = $_SESSION['mechanic_id'];

if (!isset($_SESSION['mechanic_id'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

if (isset($_POST['confirm_edit_button'])) {
  $appointment_id = $_SESSION['appointment_id'];
  $time_from = $_POST['time_from'];
  $time_to = $_POST['time_to'];
  $Status = $_POST['Status'];
  //Getting selected mechanic's mechanic_id by mechanic_name
  $db = mysqli_connect('localhost', 'root', '', 'Car_service');
  $result = mysqli_query($db, "SELECT `appointment_id` FROM `appointments` WHERE `appointment_id` = '$appointment_id'")
    or die($query . "<br/><br/>" . mysqli_error($db));
  $row = mysqli_fetch_array($result);
  $appointment_id = $row[0];

  //Requesting the edit update
  $query = "UPDATE appointments SET Time_from ='$time_from', Time_to = '$time_to',Status='$Status' WHERE appointment_id='$appointment_id'";
  if (mysqli_query($db, $query)) {
    $confirmation = "The appointment has been modified successfully.";
  } else {
    $confirmation = "Your request can't not be processed at the moment. Please try again.. ";
  }
  $_SESSION['confirmation'] = $confirmation;
  header('location: Mechanic_index.php');
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
    <h2>Edit Appointments </h2>
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

    <?php if (isset($_POST['edit_appointment_button'])) : ?>

      <!-- Getting selected appointment data from DB -->
      <?php
      $appointment_id = $_POST['radio_all_appointments'];
      $_SESSION['appointment_id'] = "$appointment_id";

      $db = mysqli_connect('localhost', 'root', '', 'Car_service');
      $query =
        "SELECT * from appointments where appointments.mechanic_id = $mech_id";

      $result = mysqli_query($db, $query) or die($query . "<br/><br/>" . mysqli_error($db));

      while ($rows = mysqli_fetch_assoc($result)) {
        $time_from = $rows['Time_from'];
        $time_to = $rows['Time_to'];
        $Status = $rows['Status'];
        //print_r($rows);
      }
      ?>

      <!-- Top right nav bar -->
      <p style="float: right;">

        <a href="index.php?logout='1'" style="color: red;">Logout</a>
      </p><br>

      <!-- Appointment info div -->
      <!--<h3 text-align="center">-- Appointment Information --</h3> -->
      <form method="post" style="width: 80%; padding-top: 0px; padding-bottom: 5px;margin-top: 5px;margin-bottom: 20px; border-radius: 3px 3px 3px 3px; border: 1px solid black;">
        <div class="input-group">
          <label>Status</label>
          <input type="text" name="Status" value="<?php echo $Status; ?>">
        </div>
        <div class="input-group">
          <label>Time From (HH:MM:SS)</label>
          <input type="time" name="time_from" value="<?php echo $time_from; ?>">
        </div>
        <div class="input-group">
          <label>Time to (HH:MM:SS)</label>
          <input type="time" name="time_to" value="<?php echo $time_to; ?>">
        </div>


        <p>
          <input type=submit name="confirm_edit_button" value="Confirm Edit" style="width:40%; padding: 10px;margin-top: 5px;margin-bottom: 8px;">
        </p>
      </form>
    <?php endif ?>
  </div>

</body>

</html>
