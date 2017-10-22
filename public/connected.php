<?php
  // If we can ping google.com then we return true. Otherwise false.
  $t1 = trim(shell_exec('curl google.com 2>&1 | grep -c "Failed to connect"'));
  $t2 = trim(shell_exec('curl google.com 2>&1 | grep -c "Could not resolve"'));
  $connected = (($t1 == "0" || $t2 == "0" ) ? true : false);
  header('Content-type: application/json');
  echo json_encode(array('response' => $connected));
?>
