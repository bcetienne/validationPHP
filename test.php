<?php
session_start();
$_SESSION['email'] = $_POST['emailLogIn'];
$_SESSION['password'] = $_POST['passwordLogIn'];
header('Location: ./index.php');