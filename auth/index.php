<?php
require 'core/Db.php';
require 'config.php';
$connection = Db::connection($dbconfig);
require 'controllers/indexController.php';
