<?php
  function db_connect()
  {
    $connection = new mysqli(DB_SERVERE,DB_USER,DB_PASS,DB_NAME);
    confirm_db_connect($connection);
    return $connection;
  }

  function confirm_db_connect($connection)
  {
    if($connection->connect_errno)
    {
      $msg = "Dabtabase connection faild";
      $msg .= $connection -> connect_error;
      $msg .= "(" . $connection -> connect_errno . ")";
      exit($msg);
    }
  }
  
  function db_disconnect($connection)
  {
    if(isset($connection))
    {
      $connection -> close();
    }
  }
?>
