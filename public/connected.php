<?php
  $connected = shell_exec('curl google.com 2>&1 | grep -c "Could not resolve"');
  header('Content-type: application/json');
  echo json_encode(array('response' => $connected));
?>
