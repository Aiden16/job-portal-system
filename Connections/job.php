<?php
$hostname_job = "localhost";
$database_job='job';
$username_job = "root";
$password_job = "";
$job;
$database_job = mysqli_connect($hostname_job, $username_job, $password_job,"job") or trigger_error(mysqli_error(),E_USER_ERROR);
?>
