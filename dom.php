<html>
<form   action="dom.php"    method=get    >
<input   type=submit  name="submit"   value=submit>
</form></html>


<?php

if(isset($_GET['submit'])){

header("Location:FirstPage.php");


}

?>