<?php

include("db.php");

$query ="SELECT * FROM register NATURAL JOIN provinces WHERE register.PROVINCE_ID=provinces.PROVINCE_ID ";
$result = $conn->query($query);


?>

<html>
<head>
<title>RegisterForm</title>
<meta charset="UTF-8">

</head>
<body>
<center>
<br>
<font face="THSarabunPSK" size=7 color="#FF1493">INFORMATION TABLE</font>
<br>
<br>
</center>
<table align=center border=1>

<tr>
<td align=center bgcolor="#FF69B4">#</td>
<td align=center bgcolor="#FF69B4">ชื่อ-นามสกุล</td>
<td align=center bgcolor="#FF69B4">อีเมล</td>
<td align=center bgcolor="#FF69B4">เพศ</td>
<td align=center bgcolor="#FF69B4">ความสนใจ</td>
<td align=center bgcolor="#FF69B4">ที่อยู่</td>
<td align=center bgcolor="#FF69B4">จังหวัด</td>
</tr>
<?php while ($row = $result->fetch_array()) { ?>
<tr>
<td align=center><?php echo $row['REGIS_ID']; ?></td>
<td align=center><?php echo $row['REGIS_NAME']; ?></td>
<td align=center><?php echo $row['REGIS_EMAIL']; ?></td>
<td align=center><?php echo $row['REGIS_SEX']; ?></td>
<td align=center><?php echo $row['REGIS_IN']; ?><?php if ($row['REGIS_IN'] != '') echo "<br>"; ?><?php echo $row['REGIS_IN2']; ?></td>
<td align=center><?php echo $row['REGIS_ADD']; ?></td>
<td align=center><?php echo $row['PROVINCE_NAME']; ?></td>
</tr>
<?php }
$result->close();
?>
</table><br>

    <center><button type="button"><a href="http://angsila.cs.buu.ac.th/~58160175/887371/lab07/register_form.php">
		Register
	</a></button>
    </center
    
</body>
</html>