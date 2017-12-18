<html  style='background-image:url(beach2.png);'>
<style>
iframe[seamless] { 
    display: block;
}

iframe:focus { 
    outline: none;
}

.Aq{
font-size:19px;color:yellow;border:none;background-color:black;width:40px;height:40px;margin-top:-30px;

}


</style>

<center><p  style="margin-top:150px;font-size:40px;font-weight:bold;font-family:AR CHRISTY;">WELCOME TO GAME ZONE</p></center>



<form   action=Sevenpage.php       method=post  />
<center>
<input style="font-size:20px;color:yellow;border:none;background-color:black;width:100px;height:40px;margin-top:-30px;"  type=submit    name=go  value=PLAY></center>
 
<p>
<center>
<!--<h3 style="margin-top:-20px;font-size:20px;font-weight:bold;font-family:cooper;">ALPHABETS</h3>
-->

<input class="Aq"  type=submit    name=A   value=A   onSubmit="document.sButton.disabled = true;" >
<input  class="Aq" type=submit    name=B  value=B     >
<input class="Aq"  type=submit    name=C  value=C>
<input class="Aq" type=submit    name=D  value=D>
<input  class="Aq" type=submit    name=E   value=E>
<input  class="Aq"  type=submit    name=F  value=F>
<input class="Aq"   type=submit    name=G  value=G>
<input  class="Aq"  type=submit    name=H  value=H>
&nbsp;<input  class="Aq" type=submit    name=I   value= I>&nbsp;
<input  class="Aq"  type=submit    name=J  value=J>
<input class="Aq" type=submit    name=K  value=K>
<input class="Aq" type=submit    name=L  value=L>
<input class="Aq"  type=submit    name=M   value=M>
<input  class="Aq" type=submit    name=N value=N>
<input  class="Aq" type=submit    name=O  value=O>
<input  class="Aq" type=submit    name=P  value=P>
<input  class="Aq" type=submit    name=Q   value=Q>
<input class="Aq"  type=submit    name=R value=R>
<input  class="Aq" type=submit    name=S  value=S>
<input  class="Aq" type=submit    name=T  value=T>
<input class="Aq"  type=submit    name=U   value=U>
<input  class="Aq" type=submit    name=V value=V>
<input  class="Aq" type=submit    name=W  value=W>
<input  class="Aq" type=submit    name=X  value=X>
<input class="Aq"  type=submit    name=Y   value=Y>
<input  class="Aq" type=submit    name=Z value=Z>
</center></p>

</form>
<html>


<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

//Reading a word
if(isset($_POST['go'])){
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query = "select name from choice";
if(mysql_query($query)){
$query_run=mysql_query($query);
while($query_row=mysql_fetch_assoc($query_run)){
$ec=$query_row['name'];

//File Creation:
$myfile = fopen("word.txt", "w") or die("Unable to open file!");
fwrite($myfile, $ec);
fclose($myfile);
$len=strlen($ec);
}}
mysql_close();

//Invite box empty
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("rec")or die("database error");
$query="DELETE * FROM choice";
if(mysql_query($query)){
//echo "done";
}
mysql_close();














$myTextFileHandler = @fopen("empty.txt","r+");
@ftruncate($myTextFileHandler, 0);





for($i=0;$i<=$len-1;$i++){
$B[$i]="_";

//File Creation:
$myfile = fopen("empty.txt", "a") or die("Unable to open file!");
fwrite($myfile, $B[$i]);
fclose($myfile);




}







echo "<p  style='text-align:center;font-size:50px;'>";

for($i=0;$i<=$len-1;$i++){
echo $B[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
}

echo "</p>";
}












require("alphabets.php");























?>
