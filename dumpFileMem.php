<?php
  $data = file_get_contents('php://input');
  $f = fopen('memory.bin', 'a+b');
  fwrite($f, $data);
  fclose($f);
?>