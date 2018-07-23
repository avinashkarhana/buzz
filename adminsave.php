<?php
session_start();
@$user=$_SESSION['user'];
include "conn.php";
if($user=='admin'){ 
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$qz=$db->query("SELECT * FROM `users`  WHERE user like'user%' order by comparetime");
echo'<table>';
while($qzz=mysqli_fetch_assoc($qz)){
	if($qzz['showtime']!==0){
		$user1=$qzz['user'];
		break;
		}
}
$qry="UPDATE `users` SET `comparetime` = '0', `showtime` = '0',status=1 WHERE `user` like 'user%'";

echo $qry;
$aa=$db->query($qry);
header("Location: /buzz/");
}
?>