<?php
$test = mysql_connect('localhost', 'root', '');
if (!$test) {
die('MySQL Error: ' . mysql_error());
}
echo 'Database connection is working properly!';
mysql_close($test);