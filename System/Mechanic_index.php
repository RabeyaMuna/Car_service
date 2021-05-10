<?php
session_start();

$mech_id = $_SESSION['mechanic_id'];
$mech_username = $_SESSION['mech_username'];
// print($mech_id);

if (!isset($_SESSION['mechanic_id'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="admin_index_body" style="background-image:url(Images/demo2.jpg); width:100%; background-size: cover;">
  <div class="header">
    <h2>Mechanic Home Page</h2>
  </div>

  <div class="content">
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

    <?php if (isset($_SESSION['confirmation'])) : ?>
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['confirmation'];
          unset($_SESSION['confirmation']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php if (isset($_SESSION['mechanic_id'])) : ?>

      <!-- <p style="float: left; ">
        <a href="admin_index.php" style="color: red;">Back To HomePage</a>
      </p> -->
      <!-- <p style="float: left; padding-left:30px; ">  
      <a href="admin_edit_mechanicList.php" style="color: red;">Mechanic_List</a>
      </p>  -->

      <p style="float: right;">
        <a href="index.php?logout='1'" style="color: red;">Logout</a>
      </p><br>
      <p style="color:brown;font:30px solid bold;  padding-top:30px;">Welcome <strong><?php echo $_SESSION['mech_username'] . "*****"; ?></strong></p>

      <!-- All appointments fetch from db -->
      <?php
      $db = mysqli_connect('localhost', 'root', '', 'Car_service');
      $query =
        "SELECT * from appointments where appointments.mechanic_id = $mech_id";
      $result = mysqli_query($db, $query) or die($query . "<br/><br/>" . mysqli_error($db));
      ?>

      <!-- All appointments div -->
      <?php if (mysqli_num_rows($result) >= 1) : ?>
        <p text-align='center'>
        <form style="width: 75%;border: none;" method="post" action="edit_appointment_time.php">
          <table style="width:100%; line-height:45px;border: 1px;text-align:center;">
            <tr>
              <th colspan="6">
                <h2> All Appointments List </h2>
              </th>
            </tr>
            <t>
              <th>Select</th>
              <th>Client</th>
              <th>Date</th>
              <th>Time From</th>
              <th>Time To</th>
            </t>
            <?php while ($rows = mysqli_fetch_assoc($result)) {
            ?>
              <tr style="text-align:center">
                <td><input type="radio" name="radio_all_appointments" value="<?php echo $rows['appointment_id'] ?>" required></td>
                <td><?php echo $rows['user_id'] ?></td>
                <td><?php echo $rows['date'] ?></td>
                <td><?php echo $rows['Time_from'] ?></td>
                <td><?php echo $rows['Time_to'] ?></td>
              </tr>
            <?php
            }
            ?>
          </table><br>
          <input type=submit name="edit_appointment_button" value="Assign Appointment Time" style="width:40%; padding: 10px;">
          <!-- <input type=submit name="admin_cancel_appointment_button" value="Cancel Appointment" style="width:40%; padding: 10px; margin-left:30px;"> -->
        </form>
        </p>
      <?php endif ?>

      <?php if (mysqli_num_rows($result) == 0) : ?>
        <p>Nobody has booked any mechanic yet.
        </p>
      <?php endif ?>
    <?php endif ?>
</body>

</html>