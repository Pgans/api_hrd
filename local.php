<?php
require_once('config.php');
$result = mysql_query("SELECT * FROM cid_hn limit 50") or die(mysql_error());

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);  
}

mysql_free_result($result);
?>


