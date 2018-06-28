<?php 
if (isset($_SESSION)) {
  header('Location: ./index.php');
} else {
  header('Location: ./sign-or-log.php');
}