<?php
session_start();
$user_id = '';
$is_loggedIn = 0;
$username = '';
if ((isset($_SESSION['user_id']))) {
    $user_id = $_SESSION['user_id'];
}
// print($user_id);
if (isset($_SESSION['username'])) {
    $is_loggedIn = 1;
    $username = $_SESSION['username'];
}

$db = mysqli_connect('localhost', 'root', '', 'Car_service');
$res = "";
$result = "";

?>

<!DOCTYPE html>
<html>

<!--  46:37  -->

<head>
    <meta charset="utf-8">
    <title>Mechanic Appoinment System | Homepage</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <?php include('header.php'); ?>

        <section class="page-title" style="background-image:url(images/background/12.jpg)">
            <div class="auto-container">
                <h1>Schedule</h1>
                <div class="text"> Check schedule and fixed your appointment in your avilable time!!</div>
            </div>
        </section>
        <section>
            <table style="width:100%; line-height:45px;border: 2px solid black;text-align:center;">
                <?php
                $res = "SELECT appointments.Time_from,users.username,appointments.Time_to,appointments.date,appointments.mechanic_id,mechanics.mech_username,mechanics.mechanic_id  FROM `appointments`  join mechanics  on appointments.mechanic_id=mechanics.mechanic_id join users on  appointments.user_id=users.user_id";
                $result = mysqli_query($db, $res);
                // print($result);
                ?>
                <thead>
                    <tr>
                        <th colspan="6">
                            <h2>Schedule </h2>
                        </th>
                    </tr>
                    <tr>
                        <th>Mechanic name</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Time From</th>
                        <th>Time_to</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr style="text-align:center">
                            <td><?php echo $rows['mech_username'] ?></td>
                            <td><?php echo $rows['username'] ?></td>
                            <td><?php echo $rows['date'] ?></td>
                            <td><?php echo $rows['Time_from'] ?></td>
                            <td><?php echo $rows['Time_to'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>



        <?php include('fotor.php'); ?>


        <!--End pagewrapper-->

        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery-ui.js"></script>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBg0VrLjLvDLSQdS7hw6OfZJmvHhtEV_sE"></script>
        <script src="js/map-script.js"></script>
        <!--End Google Map APi-->
        <script src="js/script.js"></script>

</body>

<!--  51:42  -->

</html>