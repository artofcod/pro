<?php
  /**
   * this class is getting  detaba connection
   *for distributing the connection to all the classes
   */
 class db
  {
    static public $database;

    static public function set_db($database){
      self::$database = $database;
    }
  }

?>
