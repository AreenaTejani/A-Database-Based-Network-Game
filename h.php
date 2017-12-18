

<html>
<head>
<script>
function setURL(url){
    document.getElementById('iframe').src = url;
}
</script>
</head>
<form   action=h.php    method=get>
<input type="submit"    name=submit   value=1   />
<iframe id="iframe"       height=300   width=300           src="echo $v ;" />
</form>
</html>



<?php
if(isset($_GET['submit'])){
$v="1.php";
echo "
<script>

    document.getElementById('iframe').src = $v;

</script>

";

}

?>