<?php
  // If we can ping google.com then we return true. Otherwise false.
  $result = trim(shell_exec('curl google.com 2>&1 | grep -c "Failed to connect"'));
  $connected = ($result == "0" ? true : false);
  header('Content-type: application/json');
  echo json_encode(array('response' => $connected));
?>
