<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $fd = fopen("form.txt", 'w') or die("не удалось создать файл");
  fputs($fd, $name);
  fputs($fd, $email);
  fputs($fd, $message);
  fclose($fd);
?>
