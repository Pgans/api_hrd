<?php
    //MySQL Server 1
    $dbhost1 = "192.168.200.2";
    $dbuser1 = "root";
    $dbpassword1 = "1234";
    $db1 = "mbase_data";
    $connection1 = mysql_connect($dbhost1,$dbuser1,$dbpassword1) or die (mysql_error());
    mysql_select_db($db1,$connection1);

    //MySQL Server 2
    // $dbhost2 = "119.59.104.40";
    // $dbuser2 = "mhospit1";
    // $dbpassword2 = "Xik97be76C";
    // $db2 = "mhospit1_mbase";
    // $connection2 = new mysqli($dbhost2,$dbuser2,$dbpassword2,$db2) or die (mysql_error());
    //  //mysql_select_db('mhospit1_mbase',$connection2);  
	// //$connection2 = new mysqli($servername1, $username1, $dbpassword2, $db2);
    // mysqli_set_charset($connection2, "utf8");


   // $sql = "SELECT * FROM mhospit1_mbase.populations where cid = '0000000000005'";
   // $sql = "SELECT * FROM mhospit1_mbase.populations limit 10";
    $sql = "SELECT * FROM mbase_data.population limit 10";
	// $sql ="SELECT a.CID FROM mbase_data.population a WHERE a.auto_id >(SELECT MAX(auto_id) FROM mhospit1_mbase.populations) limit 10";
//$result = mysqli_query($connection1, $sql) ;
//$result = $connection1->query($sql);
//$q = "SELECT * FROM mhospit1_mbase.populations LIMIT 10";
$result = mysqli_query($connection1, $sql);
if($result){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "หมายเลขบัตร ปปช". $row['CID']."<br>";
            echo "ชื่อ".$row['FNAME']."<br>";
            echo "สกุล".$row['LANME'];
    }
} else {
    echo "ไม่สามารถแสดงข้อมูลได้";
}

?>
