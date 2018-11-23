<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-type: application/json", true); 
 $connect = mysql_connect("localhost", "mhospit1", "Xik97be76C") or die(mysql_error());
 mysql_select_db("mhospit1_mbase") or die (mysql_error());
 mysql_query("SET NAMES utf8");
 $json_return = array();
 $query = mysql_query("SELECT * FROM populations LIMIT 10");
 while ($row = mysql_fetch_assoc($query)) {
 array_push($json_return, 
 array(
 "CID" => $row["CID"],
 "FNAME" => $row["FNAME"],
 "LNAME" => $row["LNAME"],
 "ID" => $row["auto_id"]
 )
 );
 }
 echo json_encode($json_return);
?>