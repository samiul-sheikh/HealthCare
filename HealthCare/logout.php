<?php
require_once('db.php');

// remove all session variables
session_unset();

// destroy the session
session_destroy();

  header('Location: login.php');

?>
