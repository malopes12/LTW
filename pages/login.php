<?php 
  include_once('../includes/session.php');
  include_once('../templates/tpl_auth.php');

  // Verify if user is logged in
  if (isset($_SESSION['username']))
    die(header('Location: home.php'));

  draw_login();
?>