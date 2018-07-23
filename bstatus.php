<?php
session_start();
@$user=$_SESSION['user'];
include "conn.php";
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$zz=$db->query("SELECT status FROM `users`  WHERE user like'".$user."'");
while($zzz=mysqli_fetch_assoc($zz)){
	if($zzz['status']==1)
		$q='block';
	else
		$q='none';
}
echo"<a href='savetime.php'><input type='submit' style='display:".$q."' class='button' value='HIT' /></a>"
?>