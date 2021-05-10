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

?>

<!doctype html>
<html>




<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 0px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>





<body class="admin_index_body" style="background-image:url(Images/demo3.jpg); width:100%; background-size: cover;">
<form action="insert.php" method="post">


<h1>Mechanic Registration Form</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
        <label for="mechanic_name"><strong>Mechanic Name</strong></label>
        <input type="text" placeholder="Enter Mechanic Name" name="mechanic_name" required>
        <label for="mech_username"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="mech_username" required>
        <label for="mech_password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="mech_password" required>
        <label for="mech_speacility"><strong>Speciality</strong></label>
        <input type="text" placeholder="Enter Speciality" name="mech_speacility" required>
      </div>
      <button type="submit" name='submit'><strong>REGISTER</strong></button>
      
        
      </div>


</form>

</body>
</html>