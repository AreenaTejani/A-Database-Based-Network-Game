try{


//Getting Your IP address.
//using("arp -a");

$output = shell_exec('arp -a');
echo "<pre>$output</pre><br>";

$va=substr($output,11,11);
$v1=$va."255";
$v2=$va."1";
//echo "Ye check address :".$v1."<br>";
//echo "Ye check address :".$v2."<br>";

$ho=substr($output,11,12);
echo "Ye mera address :".$ho."<br>";

//$ip=substr($output,82,14);
//echo $ip."<br>";

$yourip=substr($output,140,15);

if(strcasecmp($yourip,$v1)==false){
echo "Ye samne wala address :".$yourip;}
else {echo "correct";}




$host=trim($ho);
$root='root';
$password='password';

}


catch(EXCEPTION  $e){}

