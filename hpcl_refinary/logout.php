<?php 
include('app/config.php');
session_start();
session_unset();
header('Location:index.php');
?>