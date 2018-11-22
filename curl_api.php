<?php
// Create a curl handle
// ตัวเลขไอดี เราใช้ตัวแปรมาแทน ได้น่ะครับ 
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,"http://m30hospital.com/api/api_test.php");
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
// แปลงข้อมูลที่รับมาในรูป json มาเป็น array จะได้ใช้ง่าย ๆ
$DATA= json_decode($result, true);
// //dump ข้อมูลออกมาดู
print_r($DATA);
// ลองดึงออกทีล่ะค่า
echo "<hr>";
echo $DATA['CID']; echo "<br>";
echo $DATA['FNAME']; echo "<br>";
echo $DATA['LNAME']; echo "<br>";
echo $DATA['auto_id']; echo "<br>";