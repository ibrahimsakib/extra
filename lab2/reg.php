<?php
if(isset($_GET["reg"]))
{
   if(empty($_GET['id']) || empty($_GET['name']) || empty($_GET['pass']) || empty($_GET['email'])) 
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
ID: <input type="text" name="id"><br><br>
Name:<input type="text" name="name"><br><br>
Pass: <input type="password" name="pass"><br><br>
Email:<input type="email" name="email"> <br><br>


<button name="log"><a href="login.php">Login </a> </button>
<button name="reg"> Reg</button>

</form>
</body>
</html>