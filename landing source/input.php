<?php
  $sername   = trim($_POST['sername']);
  $mail      = trim($_POST['mail']);
  $guesttext = trim($_POST['guesttext']);
  $mark      = trim($_POST['mark']);
  
  $sername   = addslashes($_POST['$sername']);
  $mail      = addslashes($_POST['$mail']);
  $guesttext = addslashes($_POST['$guesttext']);
  $mark      = addslashes($_POST['$mark']);  
  
  $sql = mysql_query("INSERT INTO `comments` (`sername`, `mail`, `guesttext`, `mark`) VALUES ('".$sername."','".$mail."','".$guesttext."','".$mark."')");
  $result = mysql_query($sql);
  
  echo mysql_error();
?>  