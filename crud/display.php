<?php
include("conn.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div>
		<form action="" method="POST">
			<input type="text" name="firstname" 
			placeholder="firstname"> <br><br>

			<input type="text" name="lastname" 
			placeholder="lastname"> <br><br>

			<input type="number" name="age" 
			placeholder="age"> <br><br>

			<input type="submit" name="save_btn" value="Save">
			<button><a href="form.php">Show </button>
		</form>	
	</div>
	<?php
	if (isset($_POST['save_btn'])){
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$age=$_POST['age'];

		$query="INSERT INTO student (firstname,lastname,age) VALUES ('$fname','$lname','$age')";

		$data=mysqli_query($conn,$query);
		if ($data){
			//echo "data save";
		}
		else
		{
			echo "Please try again";
		}

		}

	?>




</body>
</html>