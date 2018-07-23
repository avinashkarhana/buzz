<?php
session_start();
include"conn.php";
$db->query("use buzz");
@$user=$_SESSION['user'];
$user1=$_POST['user1'];
if($user=='admin')
{
$qry1="UPDATE `users` SET point=point+1 WHERE `user` like '".$user1."'";
echo$qry1;
if($db->query($qry1))
echo"<script>window.close();</script>";
else
	echo"Error";
}
?>