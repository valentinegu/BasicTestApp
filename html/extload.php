<?php
  $url=$_GET["q"];
  shell_exec("/var/www/html/test.sh $url");
?>
