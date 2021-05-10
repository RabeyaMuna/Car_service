<?php

$_SERVER= "sql202.epizy.com";
$username= "epiz_28380373";
$password= "JxvsCXoc9xJYf";
$dbname= "epiz_28380373_Car_service";

$conn=mysqli_connect($_SERVER,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed :" .mysqli_connect_error());
}

?>