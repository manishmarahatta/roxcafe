<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'roxcafe_database';

mysql_connect($host,$user,$pass) or die("Sorry!! couldn't connect to the database");
mysql_select_db($db)or die("Sorry!! couldn't find the database");

?>