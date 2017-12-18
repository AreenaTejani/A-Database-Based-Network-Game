<html  style='background-image:url(beach2.png);'>

<center><p   style="margin-top:150px;font-size:50px;font-weight:bold;font-family:AR CHRISTY;">
CHALLENGE ZONE
</p></center>

<center><p  style="margin-top:10px;font-size:30px;font-weight:bold;font-family:AR CHRISTY;">ENTER YOUR WORD</p></center>
<form    method=post    action=Sixthpage.php>
<center><input  style="width:200;height:40px;font-size:20px;"  type=text     name=word  maxlength="10"  /><p  style="margin-top:10px;font-size:13px;font-weight:bold;font-family:cooper;">* MAX LENGTH OF WORD IS 10 CHARACTERS</p>
<input style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;" type=submit   name=submit   value=SUBMIT>
<input style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;" type=reset   name=reset  value=RESET>
<input style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;"  type=submit   name=back   value=MENU></center>
</form>
</html>


<!--Adding word in the DB-->
<?php
if(isset($_POST['submit'])){

if (preg_match('/[^A-Za-z]/', $_POST['word'])==false)
{
   
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";


mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val=strtoupper($_POST['word']);
$query="insert into choice  values('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

//Mistake checker file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, 0);
fclose($myfile);







//Code of "word length"

mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];

if(empty($ec)==true){
echo "<center><h1>no word provided</h1></center>";
header( "refresh:4;url=thirdpage.php" );
}


//File Creation:
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
$len=strlen($ec);
fwrite($myfile, $len);
fclose($myfile);




for($i=65;$i<=90;$i++){
$file=chr($i);
$file=$file.".txt";
//echo $file;
$myfile = fopen($file, "w") or die("Unable to open file!");
fwrite($myfile, 0);
fclose($myfile);
}
















}}
mysql_close();
echo "<br><center><h1>Wait While the game makes following Changes</h1></center>";

header( "refresh:3;url=Sevenpage.php" );












}
else
{
    echo "<center><h1>YOU HAVE NOT ENTERED A VALID WORD </h1></center>";
}






}









if(isset($_POST['back'])){
header( "refresh:1;url=thirdpage.php" );

}




      