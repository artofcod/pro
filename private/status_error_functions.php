<?php

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Please fix the following errors:";
    $output .= "<ul style=\"margin-left: -24px;\">";
    foreach($errors as $key => $error) {
      $output .= "<li id=\"error\"><small>" . h($error) . "</small></li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

