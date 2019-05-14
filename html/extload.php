<?php
  $url=$_SERVER['QUERY_STRING'];
  shell_exec("/var/www/html/test.sh $url");
?>
