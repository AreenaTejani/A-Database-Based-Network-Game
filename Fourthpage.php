<html   style='background-image:url(beach2.png);' >

<center>
<p   style="margin-top:200px;font-size:50px;font-weight:bold;font-family:AR CHRISTY;">IDENTIFICATION ZONE</p>

<form   method=GET   action=Fourthpage.php>
<input style="width:200;height:40px;font-size:20px;" type=text  name=ame  maxlength="10"  / ><br><br>
<input  style="font-size:40px;color:yellow;border:none;background-color:black;width:170px;height:80px;"  type=submit   name=submit   value=SUBMIT>
</form>
</center>
</html>


<?php


//Submitting your name.
if(isset($_GET['submit'])){


if( !empty($_GET['ame'])){


$output = shell_exec('arp -a');
//echo "<pre>$output</pre><br>";

$ho=substr($output,11,12);
//echo "Ye mera address :".$ho."<br>";


$yourip=substr($output,140,15);
//echo "Ye samne ka address :".$yourip."<br>";
$yourip=trim($yourip);
$myfile = fopen("samne ka ip.txt", "w") or die("Unable to open file!");
fwrite($myfile,$yourip );
fclose($myfile);

$link = mysql_connect("localhost","root","");
if (!$link) {
    //die('Could not connect: ' . mysql_error());
}

$sql = 'DROP DATABASE rec';
if (mysql_query($sql, $link)) {
   // echo "Database my_db was successfully dropped\n";
} else {
   // echo 'Error dropping database: ' . mysql_error() . "\n";
}











//Database creation
$link = mysql_connect("localhost","root","");
if (!$link) {
    //die('Could not connect: ' . mysql_error());
}

$sql = 'CREATE DATABASE rec';
if (mysql_query($sql, $link)) {
    //echo "Database created successfully\n";
} else {
    //echo 'Error creating database: ' . mysql_error() . "\n";
}

mysql_close($link);

//Creating tables
$conn =  mysql_connect("localhost","root","");
if(! $conn )
{
  //die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br />';
$sql = "CREATE TABLE reccomend(name VARCHAR(100))";
       
mysql_select_db( 'rec' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  //die('Could not create table: ' . mysql_error());
}
//echo "Table created successfully\n";
mysql_close($conn);




$conn =  mysql_connect("localhost","root","");
if(! $conn )
{
  //die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br />';
$sql = "CREATE TABLE choice(name VARCHAR(100))";
       
mysql_select_db( 'rec' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  //die('Could not create table: ' . mysql_error());
}
//echo "Table created successfully\n";
mysql_close($conn);




$conn =  mysql_connect("localhost","root","");
if(! $conn )
{
  //die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br />';
$sql = "CREATE TABLE invite(name VARCHAR(100))";
       
mysql_select_db( 'rec' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  //die('Could not create table: ' . mysql_error());
}
//echo "Table created successfully\n";
mysql_close($conn);













//Name is Writting in DB
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$val=$_GET['ame'];
$query="insert into reccomend  values('$val')";
if(mysql_query($query)){
//echo "<br>done";
}
mysql_close();


//moving to next page

echo "<br><center><h1>Wait While the game makes following Changes</h1></center>";
header( "refresh:3;url=Fifthpage.php" );








}








else
{
//When no name is provided.
echo "<center><h2>NO IDENTITY IS PROVIDED YET!</h2></center>";
}



}




























?>