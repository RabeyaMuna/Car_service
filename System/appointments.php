<?php
session_start();
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: http://localhost/Car_service-main/System/logout.php");
}

//Handling cancel appointment button
if (isset($_POST['appointment_cancel_button'])) {
  $_SESSION['appointment_id'] = $_POST['radio_appointments'];
  header('location: appointment_cancel_confirmation.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>My appointments</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image:url(Images/garage.jpg); width:100%; background-size: cover;">
  <div class="header" style="text-align: center; background-color: cadetblue;">
    <h2> <strong><?php echo $_SESSION['username'] . "'s--"; ?></strong> Appointments List</h2>
  </div>
  <div class="content">
    <?php if (isset($_SESSION['username'])) : ?>

      <p style="float: left;">
      <p style="color:brown;font:20px solid bold;  padding-top:30px; ">Welcome <strong><?php echo $_SESSION['username'] . "****"; ?></strong></p>
      </p><br><br>
      <p style="float: left;">
        <a href="index.php" style="color: red;"> Back To Previous Page</a>
      </p>
      <p style="float: right; ">
        <a href="index.php" style="color: red; padding-right:30px">Create Appointment</a>&nbsp;

        <a href="http://localhost/Car_service-main/Home.php" style="color: red; padding-right:30px">Home Page</a>&nbsp;
        <!-- <a href="appointments.php?http://localhost/Car_service-main/='1'" style="color: red; padding-right:30px">Logout</a> -->
      </p><br><br>

      <!-- My appointments fetch from db -->
      <?php
      $db = mysqli_connect('localhost', 'root', '', 'Car_service');
      $query =
        "SELECT a.appointment_id,a.mechanic_id,m.mechanic_name,a.date 
   FROM appointments as a
   INNER JOIN mechanics as m
    on a.mechanic_id=m.mechanic_id
   WHERE user_id='$user_id'
   ORDER BY a.date";
      $result = mysqli_query($db, $query) or die($query . "<br/><br/>" . mysqli_error($db));
      ?>
      <!-- Confirmation message pop up div -->
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

      <!-- My appointments div -->
      <?php if (mysqli_num_rows($result) >= 1) : ?>
        <p>You have total <?php echo mysqli_num_rows($result) ?> appointments booked in the near future...</p>
        <h2 style="margin-top: 20px; margin-bottom: 10px;text-align:center"> Appointments List </h2>
        <p text-align='center'>
        <form style="width: 75%;border: none;" method="post">
          <table style="width:100%; line-height:45px; border: 1px solid black;text-align:center;border-collapse: collapse;">
            <t>
              <th style=" border: 1px solid black;border-collapse: collapse;">Select</th>
              <th style=" border: 1px solid black;border-collapse: collapse;">Date</th>
              <th style=" border: 1px solid black;border-collapse: collapse;">Mechanic's Name</th>
              <th style=" border: 1px solid black;border-collapse: collapse;">Mechanic's ID</th>
            </t>
            <?php while ($rows = mysqli_fetch_assoc($result)) {
            ?>
              <tr style=" text-align:center">
                <td style=" border: 1px solid black;border-collapse: collapse;"><input type="radio" name="radio_appointments" value="<?php echo $rows['appointment_id'] ?>" required></td>
                <td style=" border: 1px solid black;border-collapse: collapse;"><?php echo $rows['date'] ?></td>
                <td style=" border: 1px solid black;border-collapse: collapse;"><?php echo $rows['mechanic_name'] ?></td>
                <td style=" border: 1px solid black;border-collapse: collapse;"><?php echo $rows['mechanic_id'] ?></td>
              </tr>
            <?php
            }
            ?>
          </table>

          <br>
          <p text-align="center">
            <input type=submit name="appointment_cancel_button" value="Cancel Appointment !" style="width:40%; padding: 10px;">
          </p>
        </form>
        </p>
      <?php endif ?>


      <?php if (mysqli_num_rows($result) == 0) : ?>
        <p>IF You don't have any appointment with a mechanic. To book a mechanic right now,
          <a href="index.php"> click here</a>
        </p>
      <?php endif ?>
    <?php endif ?>
  </div>

</body>

</html>