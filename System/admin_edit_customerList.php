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
if (isset($_POST['admin_cancel_appointment_button'])) {
  $_SESSION['appointment_id'] = $_POST['radio_appointments'];
  header('location: admin_cancel_appointment.php');
}

if (isset($_POST['delete_customer_button'])) {
  $user_id  = $_SESSION['user_id'];

  $db = mysqli_connect('localhost', 'root', '', 'Car_service');

  $result = mysqli_query($db, "SELECT `user_id` FROM `users` WHERE `user_id` = '$user_id'")
    or die($query . "<br/><br/>" . mysqli_error($db));
  $row = mysqli_fetch_array($result);
  $user_id = $row[0];


  $query = "DELETE FROM `users` WHERE `user_id`='$user_id'";

  if (mysqli_query($db, $query)) {
    $confirmation = "The mechanic info has been removed successfully.";
  } else {
    $confirmation = "Your request can't not be processed at the moment. Please try again.. ";
  }
  $_SESSION['confirmation'] = $confirmation;
  header('location: admin_edit_customerList.php');
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
    <h2>Customer Management</h2>
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
      </p>

      <p style="float: right;">
        <a href="index.php?logout='1'" style="color: red;">Logout</a>
      </p><br>
      <p style="color:brown;font:30px solid bold;  padding-top:30px;">Welcome <strong><?php echo $_SESSION['username'] . "*****"; ?></strong></p>

      <!-- All appointments fetch from db -->
      <?php
      $db = mysqli_connect('localhost', 'root', '', 'Car_service');
      $query =
        "SELECT * from users where user_type='0'";
      $result = mysqli_query($db, $query) or die($query . "<br/><br/>" . mysqli_error($db));
      ?>

      <!-- All appointments div -->
      <?php if (mysqli_num_rows($result) >= 1) : ?>
        <p text-align='center'>
        <form style="width: 85%;border: none;" method="post">
          <table style="width:100%; line-height:45px;border: 1px;text-align:center;border: 3px solid black;text-align:center;border-collapse: collapse;">
            <tr>
              <th colspan="8">
                <h2> All Customers List </h2>
              </th>
            </tr>
            <t>
              <th>Select</th>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>License</th>
              <th>Car Engine</th>
            </t>
            <?php while ($rows = mysqli_fetch_assoc($result)) {
            ?>
              <tr style="text-align:center">
                <td><?php echo $rows['user_id'] ?></td>
                <td><?php echo $rows['username'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['address'] ?></td>
                <td><?php echo $rows['phone_no'] ?></td>
                <td nowrap="nowrap"><?php echo $rows['car_license_no'] ?></td>
                <td><?php echo $rows['car_engine_no'] ?></td>
                <td align="center"><a href="deleteCustomer.php?id=<?php echo $rows["user_id"]; ?>">Delete</a></td>
              </tr>
            <?php
            }
            ?>
          </table><br>

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