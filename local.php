<?php

   mysql_connect("localhost", "root", "1234") or
       die("Could not connect: " . mysql_error());
   mysql_select_db("mbase_data");
   
   $result = mysql_query("SELECT * FROM population LIMIT 10");
   
   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       printf("ID: %s  Name: %s", $row["CID"], $row["FNAME"]);
   }
   
   mysql_free_result($result);
   ?>