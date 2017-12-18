<html   style='background-image:url(beach2.png);' >
<center><p   style="margin-top:150px;font-size:50px;font-weight:bold;font-family:AR CHRISTY;">REQUEST AND RESPONSE ZONE</p></center>
<form   method=get     action=Fifthpage.php>
<center><p   style="margin-top:20px;font-size:30px;font-weight:bold;font-family:AR CHRISTY;"> RESPONSE AREA</p></center>

<center><input style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;" type=submit   name=check   value=CHECK  ></center>
</form>
</html>




<?php
error_reporting(E_ERROR);

if(isset($_GET['check'])){
        //Automatic searching for request
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from invite";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();
if(!empty($ec)){


//getting name

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";


mysql_connect($host,$root,$password) or die("<center><h1>NO USER AVAILABLE
</h1></center>");
mysql_select_db("rec")or die("database error");
$query = "select name from reccomend";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();
if(!empty($ec)){
$ec = strtoupper($ec);
echo "<center><p  style='margin-top:20px;font-size:20px;font-weight:bold;font-family:AR CHRISTY;'>$ec &nbsp;INVITED YOU TO PLAY !</p></center>";
}
else{
echo "No body Invited You to Play!";
}


}
}
?>

<!--RESPONSE ZONE-->

<html>
<form   method=get     action=Fifthpage.php>

<p>

<center><input style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;" type=submit   name=YES   value=YES>
<input  style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;"  type=submit   name=NO   value=NO></center>
</p>

</form>
</html>


<?php
//Saying yes
if(isset($_GET['YES'])){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val=$_GET['YES'];
$query="insert into invite  values('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();
header( "refresh:2;url=Sixthpage.php" );
}

//saying no
if(isset($_GET['NO']))
{

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";



//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val=$_GET['NO'];
$query="insert into invite  values('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();




}

?>











<!--REQUEST ZONE-->
<html>
<form   method=get     action=Fifthpage.php>
<center><p   style="margin-top:30px;font-size:30px;font-weight:bold;font-family:AR CHRISTY;"> REQUEST AREA</p></center>
<center><p  style="margin-top:30px;font-size:20px;font-weight:bold;font-family:calibri;">BY CLICK THE BUTTON BELOW  YOU ARE GOING TO INVITE THE PLAYER
AVAILABLE!<br><br>
<center><input  style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;" type=submit   name=req   value=YES ></center>
</p></center>

</form>
</html>



<?php

if(isset($_GET['req'])){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";




//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val=$_GET['req'];
$query="insert into invite  values('$val')";
if(mysql_query($query)){
echo "done";
}
mysql_close();



//invite box is Reading from own DB
$val=0;
while($val==0){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from invite";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();
if(strcmp($ec,"YES")==0){
$val=1;
header( "refresh:2;url=Sixthpage.php" );
}




}
}
?>

















