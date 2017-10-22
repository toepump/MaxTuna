<?php
  $result = trim(shell_exec('curl google.com 2>&1 | grep -c "Could not resolve"'));
  $connected = ($result == "0" ? true : false);
  header('Content-type: application/json');
  echo json_encode(array('response' => $connected));
?>
