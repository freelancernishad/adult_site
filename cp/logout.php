<?php
// Start the session
session_start();
unset($_SESSION["login"]);
header('location:../');

?>