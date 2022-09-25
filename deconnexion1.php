<?php
session_start();
$_SESSION = array();
session_destroy();
header('location:php/admin/connected/log/index.php');
exit;
?>