<?php
//----------------------------------------------------------------------------------------------------------


//Code of A
if(isset($_POST['A'])){

mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 











$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$A = file_get_contents('A.txt');
if($A==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['A'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//A writing 1
$myfile = fopen("A.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$A = file_get_contents('A.txt');
if($A==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//A writing 1
$myfile = fopen("A.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}

















//----------------------------------------------------------------------------------------------------------


//Code of B
if(isset($_POST['B'])){

mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 






$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$B = file_get_contents('B.txt');
if($B==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['B'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//B writing 1
$myfile = fopen("B.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();







header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$B = file_get_contents('B.txt');
if($B==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//B writing 1
$myfile = fopen("B.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}






//----------------------------------------------------------------------------------------------------------


//Code of C
if(isset($_POST['C'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 







$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$C = file_get_contents('C.txt');
if($C==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['C'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//C writing 1
$myfile = fopen("C.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$C = file_get_contents('C.txt');
if($C==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//A writing 1
$myfile = fopen("A.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}



















//----------------------------------------------------------------------------------------------------------


//Code of D
if(isset($_POST['D'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 













$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$D = file_get_contents('D.txt');
if($D==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['D'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//D writing 1
$myfile = fopen("D.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$D = file_get_contents('D.txt');
if($D==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//D writing 1
$myfile = fopen("D.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}































//----------------------------------------------------------------------------------------------------------


//Code of E
if(isset($_POST['E'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 






$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$E = file_get_contents('E.txt');
if($E==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['E'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//E writing 1
$myfile = fopen("E.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$E = file_get_contents('E.txt');
if($E==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//E writing 1
$myfile = fopen("E.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){



$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}





















//----------------------------------------------------------------------------------------------------------


//Code of F
if(isset($_POST['F'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 




$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$F = file_get_contents('F.txt');
if($F==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['F'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//F writing 1
$myfile = fopen("F.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$F = file_get_contents('F.txt');
if($F==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//F writing 1
$myfile = fopen("F.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}
























//----------------------------------------------------------------------------------------------------------


//Code of G
if(isset($_POST['G'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$G = file_get_contents('G.txt');
if($G==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['G'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//G writing 1
$myfile = fopen("G.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$G = file_get_contents('G.txt');
if($G==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//G writing 1
$myfile = fopen("G.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){


$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}



























//----------------------------------------------------------------------------------------------------------


//Code of H
if(isset($_POST['H'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 

$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$H = file_get_contents('H.txt');
if($H==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['H'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//H writing 1
$myfile = fopen("H.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$H = file_get_contents('H.txt');
if($H==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//H writing 1
$myfile = fopen("H.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();




header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}


















//----------------------------------------------------------------------------------------------------------


//Code of I
if(isset($_POST['I'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 

$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$I = file_get_contents('I.txt');
if($I==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['I'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//I writing 1
$myfile = fopen("I.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$I = file_get_contents('I.txt');
if($I==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//I writing 1
$myfile = fopen("I.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}





















//----------------------------------------------------------------------------------------------------------


//Code of J
if(isset($_POST['J'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 

$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$J = file_get_contents('J.txt');
if($J==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['J'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//J writing 1
$myfile = fopen("J.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){
header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$J = file_get_contents('J.txt');
if($J==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//J writing 1
$myfile = fopen("J.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}
























//----------------------------------------------------------------------------------------------------------


//Code of K
if(isset($_POST['K'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 

$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$K = file_get_contents('K.txt');
if($K==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['K'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//K writing 1
$myfile = fopen("K.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();


header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$K = file_get_contents('K.txt');
if($K==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//K writing 1
$myfile = fopen("K.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}




















//----------------------------------------------------------------------------------------------------------


//Code of L
if(isset($_POST['L'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 

$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$L = file_get_contents('L.txt');
if($L==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['L'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//L writing 1
$myfile = fopen("L.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$L = file_get_contents('L.txt');
if($L==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//L writing 1
$myfile = fopen("L.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}
















//----------------------------------------------------------------------------------------------------------


//Code of M
if(isset($_POST['M'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 

$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$M = file_get_contents('M.txt');
if($M==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['M'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//M writing 1
$myfile = fopen("M.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$M = file_get_contents('M.txt');
if($M==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//M writing 1
$myfile = fopen("M.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();




header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}


























//----------------------------------------------------------------------------------------------------------


//Code of N
if(isset($_POST['N'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$N = file_get_contents('N.txt');
if($N==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['N'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//N writing 1
$myfile = fopen("N.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$N = file_get_contents('N.txt');
if($N==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//N writing 1
$myfile = fopen("N.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}






















//----------------------------------------------------------------------------------------------------------


//Code of O
if(isset($_POST['O'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$O = file_get_contents('O.txt');
if($O==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['O'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//O writing 1
$myfile = fopen("O.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();
header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$O = file_get_contents('O.txt');
if($O==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//O writing 1
$myfile = fopen("O.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}



























//----------------------------------------------------------------------------------------------------------


//Code of P
if(isset($_POST['P'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$P = file_get_contents('P.txt');
if($P==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['P'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//P writing 1
$myfile = fopen("P.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$P = file_get_contents('P.txt');
if($P==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//P writing 1
$myfile = fopen("P.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}


















//----------------------------------------------------------------------------------------------------------


//Code of Q
if(isset($_POST['Q'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$Q = file_get_contents('Q.txt');
if($Q==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['Q'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//Q writing 1
$myfile = fopen("Q.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();
header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$Q = file_get_contents('Q.txt');
if($Q==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//Q writing 1
$myfile = fopen("Q.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){


$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}














//----------------------------------------------------------------------------------------------------------


//Code of R
if(isset($_POST['R'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$R = file_get_contents('R.txt');
if($R==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['R'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//R writing 1
$myfile = fopen("R.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$R = file_get_contents('R.txt');
if($R==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//R writing 1
$myfile = fopen("R.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}






















//----------------------------------------------------------------------------------------------------------


//Code of S
if(isset($_POST['S'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$S = file_get_contents('S.txt');
if($S==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['S'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//S writing 1
$myfile = fopen("S.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$S = file_get_contents('S.txt');
if($S==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//S writing 1
$myfile = fopen("S.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();




header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}

















//----------------------------------------------------------------------------------------------------------


//Code of T
if(isset($_POST['T'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$T = file_get_contents('T.txt');
if($T==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['T'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//T writing 1
$myfile = fopen("T.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$T = file_get_contents('T.txt');
if($T==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//T writing 1
$myfile = fopen("T.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}


















//----------------------------------------------------------------------------------------------------------


//Code of U
if(isset($_POST['U'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$U = file_get_contents('U.txt');
if($U==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['U'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//U writing 1
$myfile = fopen("U.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$U = file_get_contents('U.txt');
if($U==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//U writing 1
$myfile = fopen("U.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}









//----------------------------------------------------------------------------------------------------------


//Code of V
if(isset($_POST['V'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$V = file_get_contents('V.txt');
if($V==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['V'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//V writing 1
$myfile = fopen("V.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$V = file_get_contents('V.txt');
if($V==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//V writing 1
$myfile = fopen("V.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}







//----------------------------------------------------------------------------------------------------------


//Code of W
if(isset($_POST['W'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$W = file_get_contents('W.txt');
if($W==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['W'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//W writing 1
$myfile = fopen("W.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$W = file_get_contents('W.txt');
if($W==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//W writing 1
$myfile = fopen("W.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}





































//----------------------------------------------------------------------------------------------------------


//Code of X
if(isset($_POST['X'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$X = file_get_contents('X.txt');
if($X==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['X'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//X writing 1
$myfile = fopen("X.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$X = file_get_contents('X.txt');
if($X==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//X writing 1
$myfile = fopen("X.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();



header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}
















//----------------------------------------------------------------------------------------------------------


//Code of Y
if(isset($_POST['Y'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$Y = file_get_contents('Y.txt');
if($Y==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['Y'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//Y writing 1
$myfile = fopen("Y.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){
$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$Y= file_get_contents('Y.txt');
if($Y==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//Y writing 1
$myfile = fopen("Y.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();




header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}















//----------------------------------------------------------------------------------------------------------


//Code of Z
if(isset($_POST['Z'])){

mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];
}}
mysql_close();

if(strcasecmp($ec,"YES")==false){
header( "refresh:1;url=WinPage1.php" );
}
elseif(strcasecmp($ec,"NO")==false){
header( "refresh:1;url=LosePage1.php" );
} 


$pass="__";
$len = file_get_contents('word.txt');
$l=strlen($len);

$fp1 = fopen('empty.txt', 'r');
if (!$fp1) {
    echo 'Could not open file somefile.txt';
}

$fp = fopen('word.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}

for($i=0;$i<=$l-1;$i++){
$wo[$i]= fgetc($fp1);
}

$v=0;

$Z = file_get_contents('Z.txt');
if($Z==0){
for($i=0;$i<=$l-1;$i++){
$counter=0;
$char = fgetc($fp);
if(strcasecmp($_POST['Z'],$char)==false){   
$wo[$i]=$char;
$counter=$counter+1;
$con = file_get_contents('correct.txt');
//echo "con".$con;
//echo "counter".$counter;
$vo=$con-$counter;
//correct subtracting words
$myfile = fopen("correct.txt", "w") or die("Unable to open file!");
fwrite($myfile, $vo);
fclose($myfile);
//Z writing 1
$myfile = fopen("Z.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

if($vo==0){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";
//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="NO";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();

header( "refresh:1;url=Winpage.php" );
}


$v=$char;
}
}
}



$Z = file_get_contents('Z.txt');
if($Z==0){

if(empty($v)==true){

$h = file_get_contents('hangman.txt');
//echo $h;
$h=$h+1;
//echo $h;
//Hangman file
$myfile = fopen("hangman.txt", "w") or die("Unable to open file!");
fwrite($myfile, $h);
fclose($myfile);
//Z writing 1
$myfile = fopen("Z.txt", "w") or die("Unable to open file!");
fwrite($myfile, 1);
fclose($myfile);
//echo 1;

$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";

if($h==7){

$ip = file_get_contents('samne ka ip.txt');
$host=trim($ip);
$root="root";
$password="password";

//Invite box is written in DB
mysql_connect($host,$root,$password) or die("connection error");
mysql_select_db("rec")or die("database error");
$val="YES";
$query="insert into invite  choice('$val')";
if(mysql_query($query)){
//echo "done";
}
mysql_close();




header( "refresh:1;url=Losepage.php" );
}



}}

else{

$h = file_get_contents('hangman.txt');
//echo $h;

//Hangman file
$h=$h.".";
$h=$h."png";
echo "
<center><img  style=margin-top:-10px; src=$h /></center>";
}







$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);




for($i=0;$i<=$l-1;$i++){
//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $wo[$i]);
fclose($myfile);
}


echo "<p  style='text-align:center;font-size:50px;margin-top:-0px;'>";
for($i=0;$i<=$l-1;$i++){
echo $wo[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</p>";

}














































?>