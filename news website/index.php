<!DOCTYPE html>
<html>

<head>
	<title>News App</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "vishal");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$Call  = $_REQUEST['Call'];
		$Add  = $_REQUEST['Add news'];
		
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student VALUES ('$Call', '$Add','$email')";
		//$sql=INSERT INTO `registration`(`call`, `add_news`, `email`) VALUES ('[value-1]','[value-2]','[value-3]')
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n $Call\n $Add\n "
				. "$email");
			
		} else{
			echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
