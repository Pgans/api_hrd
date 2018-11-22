<?php 
$conn1=  mysql_connect("119.59.104.40", "mhospit1", "Xik97be76C") or
die("Could not connect: " . mysql_error());
mysql_select_db("mhospit1_mbase");
mysql_set_charset("UTF8", $conn1);

$result = mysql_query("SELECT * FROM populations LIMIT 10");
//mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
printf("ID: %s  Name: %s", $row["CID"], $row["FNAME"]);
}

mysql_free_result($result);
?>

