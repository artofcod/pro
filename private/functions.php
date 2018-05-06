<?php

  function url_for_p($strict_path)
  {
    if($strict_path[0] != '/')
    {
      $strict_path = '/'.$strict_path;
    }
    return WWW_PUBLIC_ROOT . $strict_path;
  }

  function url_for_i($strict_path)
  {
    if($strict_path[0] != '/')
    {
      $strict_path = '/'.$strict_path;
    }
    return WWW_ROOT . $strict_path;
  }

  function url_for_r($strict_path)
  {
    if($strict_path[0] != '/')
    {
      $strict_path = '/'.$strict_path;
    }
    return ROOT . $strict_path;
  }
  function u($String)
  {
    return urlencode($String);
  }

  function raw_u($string)
  {
    return rawurldecode($string);
  }

  function h($String)
  {
    return htmlspecialchars($String);
  }

  function is_post()
  {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }

  function is_get()
  {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
  }
  function redirect($location)
  {
    return header('location:'.$location);
  }
?>
