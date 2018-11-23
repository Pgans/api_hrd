<?php
function send_line_notify($message, $token)
{
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
  curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec( $ch );
  curl_close( $ch );

  return $result;
}

$message = $_REQUEST['message'];
//$message = 'testทดสอบ';
$token = 'G80cP4VTJKlYQ7dz0jj2aJjoTk5SNQsWqOScCK7Lsxv';  //it30:FhffHQSKBOXOFMv5wchDa1Z24U6irstlXWBPgYK6XDq
//$token = 'FhffHQSKBOXOFMv5wchDa1Z24U6irstlXWBPgYK6XDq'; hdc-m30:::G80cP4VTJKlYQ7dz0jj2aJjoTk5SNQsWqOScCK7Lsxv,,,,
 //ตัวเอง cfdpRl44nox1LUTTPWYppxN98w4WS0j1jB6dpPNB2FU
//คุณภาพ BwiAf5chk6sFvhhxx6iLVN0e7L8uSmRZ9uaQyVc41l6   //รวมญาติ t2YMIER86SrA5DGvrTbvEj5RqT4ehI5jdWQbqxY9oXO

echo send_line_notify($message, $token);

?>