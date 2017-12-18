<script type='text/javascript'>
function checkForm() {
if (!document.getElementById('customerName').value) {
alert('Please write your name')
return false
}

return true
} 
</script>

<form action='Menu.php' method='post' onsubmit='return checkForm()'>
<div>
<input type='text' name='customerName' id='customerName'/>
<input type='submit' value='Submit' onsubmit='this.value = "Wait..."; this.disabled = true'/>
</div>
</form>


<?php
if(isset($_GET['customerName'])){
echo "hell";
}

?>