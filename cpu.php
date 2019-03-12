<?php
function CPU(){
  //checking server port
  $cpu = 'http'.($_SERVER['HTTPS']=='on'?'s':'').'://';

  //getting server host and requested uri
  $cpu .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  
  return $cpu;
}

echo CPU();
?>
