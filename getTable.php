<?php
include "conn.php";
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$zz=$db->query("SELECT * FROM `users`  WHERE user like'user%' order by comparetime");
echo'<table border="0.4"><th>Buzzer Rank</th><th>User Name</th><th>Hit Time</th>';
$t=1;
while($zzz=mysqli_fetch_assoc($zz)){
	if($zzz['showtime']!=='0'){
	echo'<tr><td>'.$t.'</td><td>'.$zzz['user'].'</td><td>'.$zzz['showtime'].'</td></tr>';
	$t++;}
}
echo"</table>";
?>