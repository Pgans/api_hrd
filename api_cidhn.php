<?php 
$conn1=  mysql_connect("119.59.104.40", "mhospit1", "Xik97be76C") or
die("Could not connect: " . mysql_error());
mysql_select_db("mhospit1_mbase");
mysql_set_charset("UTF8", $conn1);

$result = mysql_query("SELECT * FROM cid_hn ") or die(mysql_error());

$objResult = mysql_fetch_array($result);

echo json_encode($objResult);
?>



