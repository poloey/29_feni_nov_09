<?php
class Db {
  public static function connection($dbconfig)  {
    return new PDO($dbconfig['dsn'], $dbconfig['username'], $dbconfig['password'], $dbconfig['options']);
  }
}