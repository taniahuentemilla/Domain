<?php
$file = file("chat.txt");
for ($i = max(0, count($file)-50); $i < count($file); $i++) {
  echo $file[$i] . "\n";
}
?>