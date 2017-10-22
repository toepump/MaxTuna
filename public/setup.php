<?php
  // GET PARAMS
  $pass = $_GET['password'];
  $network = $_GET['network'];

  // Delete OLD FILE
  $filename = "supp.conf";
  unlink($filename);

  // CREATE NEW FILE
  $buffer = "country=GB\n";
  $buffer .= "ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev\n";
  $buffer .= "update_config=1\n";
  $buffer .= "\n";
  $buffer .= "network={\n";
  $buffer .= "ssid=\"". $network . "\"\n";
  $buffer .= "psk=\"". $pass . "\"\n";
  $buffer .= "key_mgmt=WPA-PSK\n";
  $buffer .= "}";

  file_put_contents ($filename , $buffer);

  // REDIRECT TO INDEX
  header( 'Location: index.php');
?>
