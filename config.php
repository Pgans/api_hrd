<?php
//$Setup_Server = 'localhost';
$Setup_Server = '192.168.200.2';
$Setup_User = 'm30';
$Setup_Pwd = '1234';

$Setup_Database = 'mbase_data';

mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);

mysql_query("use $Setup_Database");
mysql_query("SET NAMES UTF8");

?>