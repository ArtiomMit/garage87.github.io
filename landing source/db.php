<?php
  $connect = mysql_connect("localhost", "root", "");
  $db = mysql_select_db("garage-87");
  mysql_query("SET NAMES 'utf8' ");
  
  if(!$connect || !$db)
  {
	exit(mysql_error());
  }
?>