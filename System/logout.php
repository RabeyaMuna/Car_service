<?php
session_start();
$_SESSION = array();
session_regenerate_id();

session_destroy();

?>

<script>
    location.assign('http://localhost/Car_service-main/');
</script>