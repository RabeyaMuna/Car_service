<?php
session_start();
$username = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
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

<body class="admin_index_body" style="background-image:url(Images/garage.jpg); width:100%; background-size: cover;">
  <div class="header">
    <h2>Mechanic Management</h2>
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
    <?php if (isset($_SESSION['username'])) : ?>

      <p style="float: left; ">
        <a href="admin_index.php" style="color: red;">Back To HomePage</a>
      <p style="float: left; padding-left:280px; ">
        <a href="add_mechanic.php" style="color: red;">Add new Mechanic</a>
      </p>

      <p style="float: right;">
        <a href="index.php?logout='1'" style="color: red;">Logout</a>
      </p><br>
      <p style="color:brown;font:30px solid bold;  padding-top:30px;">Welcome <strong><?php echo $_SESSION['username'] . "*****"; ?></strong></p>

      <!-- All appointments fetch from db -->
      <?php
      $db = mysqli_connect('localhost', 'root', '', 'Car_service');
      $query =
        "SELECT * from mechanics";
      $result = mysqli_query($db, $query) or die($query . "<br/><br/>" . mysqli_error($db));
      ?>

      <!-- All appointments div -->
      <?php if (mysqli_num_rows($result) >= 1) : ?>
        <p text-align='center'>
        <form style="width: 75%;border: none;" method="post" action="edit_mechanic.php">
          <table style="width:100%; line-height:45px;border: 1px;text-align:center;">
            <tr>
              <th colspan="6">
                <h2> All Mechanics List </h2>
              </th>
            </tr>
            <t>
              <th>Select</th>
              <th>ID</th>
              <th>Name</th>
              <th>Username</th>
              <th>Speciality</th>
            </t>
            <?php while ($rows = mysqli_fetch_assoc($result)) {
            ?>
              <tr style="text-align:center">
                <td><input type="radio" name="radio_all_mechanics" value="<?php echo $rows['mechanic_id'] ?>" required></td>
                <td><?php echo $rows['mechanic_id'] ?></td>
                <td><?php echo $rows['mechanic_name'] ?></td>
                <td><?php echo $rows['mech_username'] ?></td>
                <td><?php echo $rows['mech_speacility'] ?></td>
              <?php
            }
              ?>
          </table><br>
          <input type=submit name="edit_mechanic_button" value="Edit Mechanic Info" style="width:40%; padding: 10px;">

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