<html>
<head>
<style>
.button {
width:250px;
font-size:40px;
font-family:AR CHRISTY;
    background-color:black; /* Blue */
    border: none;
    color: yellow;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,3,0.24),0 17px 50px 0 rgba(30,30,20,0.19);
}

</style>
</head>

<body  style='background-image:url(beach2.png);' >
<center>
<p  style="background-color:balck;color:red;margin-top:100px;font-size:70px;font-family:cooper;font-weight:bold;"><br>MENU</p>
</center><br>
<form  method="get"     action="Thirdpage.php">
<center>
<input  class="button button2 "   type=submit   name="ply1"   value=PLAYER1><br>
<input  class="button button2 "   type=submit   name="ply"   value=PLAYER2><br>
<input  class="button button2 "   type=submit   name="about"   value=ABOUT><br>

<br>

</center>
</form>


</body>
</html>



<?php
if(isset($_GET['ply'])&&!empty($_GET['ply'])){

header("Location:Fourthpage.php");

}


if(isset($_GET['about'])){

header("Location:Aboutpage.html");

}



?>






