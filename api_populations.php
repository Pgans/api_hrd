

<?php

$CID=$_GET['CID'];

if($CID==''){

exit();

}

$hostdb = 'localhost';

$usernamedb = 'mhospit1';

$passworddb = 'Xik97be76C';

$objConnect = mysql_connect($hostdb,$usernamedb,$passworddb);

if($objConnect)

{

//���͡ DBNAME STD
$objDB = mysql_select_db('mhospit1_mbase');
mysql_query("SET NAMES UTF8");

}

else

{

echo 'MySQL Connect Failed : Error : '.mysql_error();

echo �\r\n�;

exit();

}

//�֧������ ID �Ҩҡ Databases

$objQuery = mysql_query("SELECT * FROM populations where CID ='$CID'") or die(mysql_error());



$objResult = mysql_fetch_array($objQuery);

//����ҵ���� ���ŧ�� json �������͡

echo json_encode($objResult);

?>