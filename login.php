<?php
$date=date('H:i j F Y');
$user=$_POST["user"];
$pass=$_POST["pass"];
include "conn.php";
if(!get_magic_quotes_gpc())
{
 $user=addslashes($user);	
 $pass=addslashes($pass);
}
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$aa=$db->query("select user from users ");
while($aaa=mysqli_fetch_assoc($aa)){
	if($user==$aaa['user'])
		$ufound=true;
}
$sql="select pass from users where user='".$user."'";
$result=mysqli_query($db,$sql);
$dpass=mysqli_fetch_assoc($result);
session_start();
if($ufound)
	{
	   if($dpass['pass']==$pass)
	   {
	      if( $user=='admin'){
		  header("Location: /buzz/adcontrol.php"); 
				@$_SESSION['user']=$user;}
		  else{
		  header("Location: /buzz/buzz.php");
		  @$_SESSION['user']=$user;}
	   }
       else
           echo'Wrong Password<br><br><a href="/hms/">Try Again</a>';
	   
    }
else
    echo'No such user exist.<a href="index.php">Try Again</a>';	

?>