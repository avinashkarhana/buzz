<html>
<head>
<style>
input[type=text], select , input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]:hover {
    background-color: #551A8B;
	box-shadow: 2px 3px 8px blue;
}
.button:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
 ab{
      text-align:center;
   	  font-family:Agency FB;
	  font-size:25px;
	  font-weight:"bold"; 
   } 
  az{
      text-align:center;
   	  font-family:Agency FB;
	  font-size:30px;
	  font-weight:"bold";
      text-shadow:2px 5px 8px pink;
   } 
 ax{
      border:2px solid lime;
	  background: cyan;
	  border-radius:40px;
	  box-shadow:8px 4px 7px green;
	  padding:10px;
	  width: 5%;
      font:Agency FB;
	  font-size:15px;
	  font-weight:"bold";
	  text-shadow:2px 5px 8px yellow; 
}
    karhana{
      border:2px solid red;
	  background: magneta;
	  border-radius:40px;
	  box-shadow:4px 5px 2px gold;
	  padding:10px;
	  width: 5%;
      align: left;
	  font:Agency FB;
	  font-size:15px;
	  font-weight:"bold";
	  text-shadow:2px 5px 8px grey; 
      -webkit-transition: width 2s, height 4s;
	  transition: width 2s;
}
    avinash{
      border:2px solid red;
	  background: magneta;
	  border-radius:40px;
	  box-shadow:4px 5px 2px gold;
	  padding:10px;
	  align: right;
	  width: 5%;
      font:Agency FB;
	  font-size:15px;
	  font-weight:"bold";
	  text-shadow:2px 5px 8px grey; 
      -webkit-transition: width 2s, height 4s;
	  transition: width 2s;
}
avi{
	font-family:Gloucester MT;

	font-size:35;
   }
.button{
    background-color: #518BC7;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Pytech Buzz Round</title>
<link rel="stylesheet" href="css/button_style.css">
<link rel="stylesheet" href="css/style.css">
	  <script src='js/jquery.min.js'></script>
      <script src="js/index.js"></script>
	  <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="//use.edgefonts.net/alex-brush;aguafina-script;smythe;fondamento;glass-antiqua;almendra-sc;coustard;dorsa;qwigley;antic;abel;advent-pro;arizonia;kelly-slab.js"></script>
<body onload="refreshTable()">
<img src="img/pytechlogo.png" align="left"><avii style="display:inline-block;width:300px;margin-left:210px"><p align="center"><avi>Python Workshop Contest</avi></p>
<p align='center'><b>(Team PyTech)</b></p><br>
<p align="center"><ax>BUZZ round !</ax></p></avii><br>
<?php
session_start();
@$user=$_SESSION['user'];
include "conn.php";
if(!mysqli_query($db,'use buzz'))
echo"Can't connect to database";
$aa=$db->query("SELECT * FROM `users`  WHERE user like'user%' order by comparetime");
$z=0;
echo"<script type='text/javascript'>
    $(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tableHolder').load('getTable.php', function(){
           setTimeout(refreshTable, 2000);
        });
    }
</script>
<script type='text/javascript'>
    $(document).ready(function(){
      refreshButton();
    });

    function refreshButton(){
        $('#brefresh').load('bstatus.php', function(){
           setTimeout(refreshButton, 2000);
        });
    }
</script>";
echo"USER: ".$user."<p align='right'><a href='logout.php'><input type='submit' class='button' value='Logout' /></a></p><p align='center'>Last Hit By Users :</p><Br>";
while($aaa=mysqli_fetch_assoc($aa)){
	if($user==$aaa['user'])
		$z++;
}
if($z==0)
     header("Location: /buzz/");
echo'<div style="position :relative;
    width: 100%;height:340px;"><div  style="width: 25%; border-radius: 5px;left: 38%; background-color: #f2f2f2;position: absolute;" id="tableHolder"></div>';
echo"<br><br><br><br><br><br><br><br><br><br><br><p align='center' id='brefresh'></p></div>";
?>
</body>
</head>
</head>
</html>