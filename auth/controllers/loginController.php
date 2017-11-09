<?php
session_start();
$_SESSION['user_id'] = 'sarwar';

if ( isset ($_SESSION['user_id']) ) {
  header('location: /');
}
require 'views/login.view.php';