<?php
session_start();
@$user=$_SESSION['user'];
include "conn.php";
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$aa=$db->query("SELECT * FROM `users`  WHERE user like'user%' order by comparetime");
$z=0;
while($aaa=mysqli_fetch_assoc($aa)){
	if($user==$aaa['user'])
		$z++;
}
if($z==0 || $user=='admin')
     header("Location: /buzz/");
$t = microtime(true);
$micro = sprintf("%06d",($t - floor($t)) * 1000000);
$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
$time=1;
$time1= $d->format("YmdHisu"); 
$time2= $d->format("H:i:s:u d-m-Y"); 
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$qry="UPDATE `users` SET `comparetime` = '".$time1."', `showtime` = '".$time2."',status=0 WHERE `user` = '".$user."'";
echo $qry;
$aa=$db->query($qry);
header("Location: /buzz/");
?>