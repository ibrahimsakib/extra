<?php
if(isset($_GET["log"]))
{
   if(empty($_GET['id']) || empty($_GET['pass'])) 
  {
  	echo "<h5>Empty</h5>";
  }
  else
  {
  	echo "ok";
  }
}
 
	
 
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
 
<form method="get">
ID: <input type="text" name="id"><br>
Pass: <input type="password" name="pass"><br>



<button name="log">Login</button>
<button name="reg"> <a href="reg.php">Reg </a></button>

</form>
</body>
</html>