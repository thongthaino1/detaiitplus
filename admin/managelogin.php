<?php
include "controllers/c_user.php";
$login = new c_user();
$login->check_login();
?>