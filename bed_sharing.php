<?php
	require("config.php");
	
	$sql = "SELECT  CURDATE() AS regdate, CURTIME() AS time , a.offid AS hcode,
b.UNIT_ID AS ward_code, b.UNIT_NAME AS ward_name, 
CASE 
WHEN b.UNIT_ID = '22' THEN 2
WHEN b.UNIT_ID = '38' THEN 15
WHEN b.UNIT_ID = '39' THEN 15
END AS ward_std,
CASE 
WHEN b.UNIT_ID = '22' THEN 9
WHEN b.UNIT_ID = '38' THEN 25
WHEN b.UNIT_ID = '39' THEN 25
END AS ward_bed, COUNT(i.ADM_ID) AS ward_pt
FROM mbase_data1.gcoffice a, mbase_data1.service_units b
LEFT JOIN mbase_data1.ipd_reg i ON b.UNIT_ID = i.WARD_NO AND i.IS_CANCEL = 0 AND i.DSC_DT = 0  AND i.DSC_STATUS = 0 
AND i.DSC_TYPE = 0 AND i.BED_NO <> ''
WHERE b.UNIT_ID IN ('22','38','39')
GROUP BY b.UNIT_ID ";

$q = mysql_query($sql);
$num = mysql_num_rows($q);
if($num >0)
	{
		while($r = mysql_fetch_array($q)) 
			{
			$txt = "รายงานครองเตียงวันที่ $r[regdate] ตึก $r[ward_name] จำนวน$r[ward_pt]เตียง ";
			?>
		<iframe src= "http://localhost/line_notify/hdc30_api.php?message= <?php echo "$txt"; ?>"> </iframe>
	<?php
		}
}
    ?>
