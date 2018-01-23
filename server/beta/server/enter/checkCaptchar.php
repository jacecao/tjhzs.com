<?php
  header('Content-type: text/html; charset=utf-8');
  session_start();
  if (isset($_REQUEST['usercode']) && !empty($_REQUEST['usercode'])) {
    $input_code = strtolower($_REQUEST['usercode']);
    if ($input_code === $_SESSION['usercode']) {
      echo 1;
    } else {
      echo 0;
    }
  }
?>
