<?php
session_start();
$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
$errors = array();
$msg = "";

if (!isset($_SESSION['username']) || isset($_GET['logout'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: http://localhost/Car_service-main/System/logout.php');
}
//Handling Appointment request 
if (isset($_POST['appoint_button'])) {
  $db = mysqli_connect('localhost', 'root', '', 'Car_service');
  $mechanic_id = test_input($_POST['radio_mechanics']);
  $appointment_date = $_POST['appointment_date'];

  //Checking if mechanic already booked on that day
  $query = "SELECT * FROM appointments WHERE user_id='$user_id' AND mechanic_id='$mechanic_id' AND date='$appointment_date'";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
    //echo "You already booked desired mechanic on $appointment_date."; 
    array_push($errors, "You already booked desired mechanic on $appointment_date.");
  } else {
    //Checking if mechanic fully booked on that day
    $query = "SELECT * FROM appointments WHERE mechanic_id='$mechanic_id' AND date='$appointment_date'";
    $results = mysqli_query($db, $query);
    /*----------------------------------------------------------------------*/
    /* If the same mechanic has appointment 4 or less ,the appointment will be taken */
    //print(mysqli_num_rows($results));
    if (mysqli_num_rows($results) < 4) {
      //Finally creating an appointment record
      $query = "INSERT INTO appointments (user_id,mechanic_id,date) VALUES ('$user_id','$mechanic_id','$appointment_date')";
      if (mysqli_query($db, $query)) {
        //echo "The appointment was created successfully";
        $_SESSION['confirmation'] = "The appointment was created successfully";
        header("location: appointments.php");
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
      }
    } else {
      $msg = "Desired mechanic is fully booked on $appointment_date. Please try booking him on another date.";
      array_push($errors, $msg);
    }
  }
}

/*----------------------------------------------------------------------*/

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image:url(Images/garage.jpg); width:100%; background-size: cover;">


  <div style="flex:justify-conten; background-color:rgb(192,192,192); width:100%;height:20%;">
    <h1 style="text-align: center; padding:20px; color:brown;">Welcome To Home Page</h2>

      <p style="color:brown;font:40px solid bold;  text-align:center; ">*****<strong><?php echo $_SESSION['username'] . "****"; ?></strong></p><br><br>
      <!-- logged in user information -->
      <?php if (isset($_SESSION['username'])) : ?>
        <p style="float: left;">
          <a href="http://localhost/Car_service-main/Home.php" style="color: blue;padding-left:40px; ">Home Page</a>&nbsp;
        </p>
        <p style="float: right; ">
          <a href="appointments.php?appointments='1'" style="color: blue;padding-right:40px; ">My Appointments</a>&nbsp;
          <a href="index.php?logout='1'" style="color: red; padding-right:40px">Logout</a>
        </p><br><br>
        <?php include('errors.php'); ?>
        <!--<p>Welcome <strong> <?php echo $_SESSION['username'] . "..."; ?></strong></p> -->

        <!-- Book a mechanic div -->
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'Car_service');
        $query = "SELECT * from mechanics";
        $result = mysqli_query($db, $query);
        ?>
  </div>


  <div class="header" style=" background-color: ;">
    <h2>Make Your Appointment</h2>
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





    <p style="text-align:center">
    <form style="width: 75%;border: none;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <table style="width:100%; line-height:45px; border:3px;text-align:center;border: 1px solid black;text-align:center;border-collapse: collapse;">
        <tr>
          <th colspan="3" style=" border: 1px solid black;border-collapse: collapse;">
            <h2>Mechanics list</h2>
          </th>
        </tr>
        <t>
          <th style=" border: 1px solid black;border-collapse: collapse;">Select</th>
          <th style=" border: 1px solid black;border-collapse: collapse;">Mechanic's ID</th>
          <th style=" border: 1px solid black;border-collapse: collapse;">Mechanic's Name</th>
        </t>
        <?php while ($rows = mysqli_fetch_assoc($result)) {
        ?>
          <tr text-align="center">
            <td style=" border: 1px solid black;border-collapse: collapse;"><input type="radio" name="radio_mechanics" value="<?php echo $rows['mechanic_id'] ?>" required></td>
            <td style=" border: 1px solid black;border-collapse: collapse;"><?php echo $rows['mechanic_id'] ?></td>
            <td style=" border: 1px solid black;border-collapse: collapse;"><?php echo $rows['mechanic_name'] ?></td>
          </tr>
        <?php
        }
        ?>
      </table>

      <br>
      <p text-align="left"><b>Date:</b><br><input type="date" name="appointment_date" placeholder="dd-mm-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}" style="width:50%; padding: 15px;" required="">
        <input type=submit name="appoint_button" value="APPOINT !" style="width:43%; padding: 17px; ">
      </p>
    </form>
    </p>

  <?php endif ?>
  </div>

  <h2 style=" text-align: center; color:red;padding-left:50px;margin-top:30px;font:50px bold; background-color:burlywood;width:100%">Contact Us :</h2>

  <section class="info" style=" background:coral; height:50%; width :100%;border: 1px solid #c3c3c3;display: flex;justify-content: space-around;">



    <div style=" margin-top: 70px; background:coral; float:left; font-family: 'Courier New' , Courier, monospace; color:cornsilk; ">
      <h3>Information</h3>
      <ul>
        <li>Contact :01903381749</li>
        <li>Email :mj1@gmail.com</li>
        <li>Address : 36,N Motizill,Dhaka:1200</li>
      </ul>
    </div>
    <div style=" margin: 70px;float:center; font-family: 'Courier New' , Courier, monospace; color:cornsilk;">
      <h3>Closing days</h3>
      <ul>
        <li>Thursday :From 2pm </li>
        <li>Monday :8 am to 6pm</li>
      </ul>
    </div>
    <div style="margin: 70px;float:center; font-family: 'Courier New' , Courier, monospace; color:cornsilk;">
      <h3>Working days</h3>
      <ul>
        <li>Sunday :8 am to 6pm</li>
        <li>Monday :8 am to 6pm</li>
        <li>Tuesday :8 am to 6pm</li>
        <li>Wednesday :8 am to 6pm</li>
        <li>Thursday :8 am to 2pm</li>
        <li>Saturday :8 am to 6pm</li>
      </ul>
    </div>
    </div>
  </section>
  <div>
    <p style="text-align:center;font: 50px bold;color:black;background-color:burlywood">copyright@Rabeya &nbsp;&nbsp;</p>
  </div>

</body>

</html>