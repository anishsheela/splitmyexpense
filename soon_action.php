<?php
require 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];

$query = "insert into contact (name, email) values('$name', '$email')";
mysql_query($query);
header("Location: ./index.php");
?>
