<?php

  // defining constants for file path on hard drive
  define("PRIVATE_PATH",dirname(__file__));
  define("PROJECT_PATH",dirname(PRIVATE_PATH));
  define("SHARED_PATH",PRIVATE_PATH . '\shared');
  define("PUBLIC_PATH",PROJECT_PATH . '\public');

  //defining constants for css,js,jquery urldecode
  //strpos() find a strin in a given string
  //substr() cuts a portin of string in given string
  //WWW_PUBLIC_ROOT is only used in public directory
  $public_end =strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
  $doc_end = substr($_SERVER['SCRIPT_NAME'],0,$public_end);
  define("WWW_PUBLIC_ROOT",$doc_end);

  //WWW_ROOT is only for index.php
  $root_end = strpos($_SERVER['SCRIPT_NAME'],'index.php');
  $root_dir = substr($_SERVER['SCRIPT_NAME'],0,$root_end);
  define("WWW_ROOT",$root_dir.'public');

  $root_path = substr($_SERVER['SCRIPT_NAME'],0,4);
  define('ROOT',$root_path);


  require_once('functions.php');
  require_once('db_credentials.php');
  require_once('database_functions.php');
  require_once('status_error_functions.php');
  require_once('validation_functions.php');

  //manually loading classes
  require_once(PRIVATE_PATH.'\class\db.class.php');
  require_once(PRIVATE_PATH.'\class\user.signup.class.php');
  require_once(PRIVATE_PATH.'\class\user.login.class.php');

  $database = db_connect();
  db::set_db($database);

?>
