<?php
include "conn.php";
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$qe="SELECT * FROM `users`  WHERE user like'user%' order by point desc";
$ww=$db->query($qe);
echo'<table border="0.4"><th>Rank</th><th>User Name</th><th>Points</th>';
$t=1;
while($w=mysqli_fetch_assoc($ww)){
	echo'<tr><td>'.$t.'</td><td>'.$w['user'].'</td><td>'.$w['point'].'</td></tr>';
	$t++;}
echo"</table>";
?>