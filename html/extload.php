<?php
  $url=$_GET["q"];
  shell_exec("/var/www/html/extload.sh $url");
  header("Location: /index.html");
?>
