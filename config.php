<?php
$db_name = "c32split";
$db_host = "localhost";
$db_user = "c32split";
$db_password = "split123";

$con = mysql_connect($db_host, $db_user, $db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db($db_name, $con);
if (!$db_selected) {
    die ('Can\'t use '.$db_name.' : ' . mysql_error());
}
?>
