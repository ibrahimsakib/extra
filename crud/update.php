<?php
include("conn.php"); 
$id=$_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<div>
		<form action="" method="POST">
			<input value="<?php echo $row['firstname']?> "type="text" name="firstname" 
			placeholder="firstname"> <br><br>

			<input value="<?php echo $row['lastname']?> " type="text" name="lastname" 
			placeholder="lastname"> <br><br>

			<input value="<?php echo $row['age']?> " type="number" name="age" 
			placeholder="age">  <br><br>

			<input type="submit" name="update_btn" value="Update">
			<button><a href="form.php">Back </button>
		</form>	
	</div>
	<?php
	if (isset($_POST['update_btn'])){
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$age=$_POST['age'];

		$update="UPDATE student SET firstname='$fname',lname='lastname',age='$age' WHERE id='$id'";

		$data=mysqli_query($conn,$update);
		if ($data){
			
			//echo "data update";
		}
		else
		{
			echo "Please try again";
		}

		}

	?>