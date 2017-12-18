<html>

<h1>REQUEST AND RESPONSE ZONE</h1>
<form   method=get     action=Check1.php>
<input  type=submit   name=check   value=check  >
</form>
</html>




<?php
if(isset($_GET['check'])){
        //Automatic searching for request
mysql_connect("192.168.1.2","root","password") or die("connection error");
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
mysql_connect("192.168.1.6","root","password") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from reccomend";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();
if(!empty($ec)){
echo "<p>". $ec ."INVITED YOU TO PLAY !</p>";
}
}
else{
echo "No body Invited You to Play!";
}


}
?>

<!--RESPONSE ZONE-->

<html>
<form   method=get     action=Check1.php>
<table>
<tr>
<td>
<input  type=submit   name=YES   value=YES >
<input  type=submit   name=NO   value=NO >

<br><br><br><br>



</td>
</tr>
</table>
</form>
</html>


<?php
//Saying yes
if(isset($_GET['YES'])){
//Invite box is truncate in DB
mysql_connect("192.168.1.6","root","password") or die("connection error");
mysql_select_db("rec")or die("database error");
 $val=$_GET['YES'];
$query="TRUNCATE TABLE invite  values('$val')";
if(mysql_query($query)){
echo "done";
}
mysql_close();

//Invite box is written in DB
mysql_connect("192.168.1.6","root","password") or die("connection error");
mysql_select_db("rec")or die("database error");
$val=$_GET['YES'];
$query="insert into invite  values('$val')";
if(mysql_query($query)){
echo "done";
}
mysql_close();
header( "refresh:2;url=Sixthpage.php" );
}

//saying no
if(isset($_GET['NO']))
{
//Invite box is truncate in DB
mysql_connect("192.168.1.6","root","password") or die("connection error");
mysql_select_db("rec")or die("database error");
 $val=$_GET['NO'];
$query="TRUNCATE TABLE invite  values('$val')";
if(mysql_query($query)){
echo "done";
}
mysql_close();

//Invite box is written in DB
mysql_connect("192.168.1.6","root","password") or die("connection error");
mysql_select_db("rec")or die("database error");
$val=$_GET['NO'];
$query="insert into invite  values('$val')";
if(mysql_query($query)){
echo "done";
}
mysql_close();




}

?>











<!--REQUEST ZONE-->
<html>
<form   method=get     action=Check1.php>
<table>
<tr>
<td>
<p>BY CLICK THE BUTTON BELOW  YOU ARE GOING TO INVITE THE PLAYER
AVAILABLE!<br><br><br><br>
<center><input  type=submit   name=req   value=YES ></center>
</p>
</td>
</tr>
</table>
</form>
</html>



<?php
if(isset($_GET['req'])){
//Invite box is truncate in DB
mysql_connect("192.168.1.6","root","password") or die("connection error");
mysql_select_db("rec")or die("database error");
 $val=$_GET['req'];
$query="TRUNCATE TABLE invite  values('$val')";
if(mysql_query($query)){
echo "done";
}
mysql_close();

//Invite box is written in DB
mysql_connect("192.168.1.6","root","password") or die("connection error");
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
mysql_connect("192.168.1.2","root","password") or die("connection error");
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

















