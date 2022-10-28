<?php 
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "zadah_komputasi_kuis1");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$id = [null];
		$nama_agent = $_REQUEST['nama_agent'];
		$role = $_REQUEST['role'];
		


		$sql = "INSERT INTO informasi VALUES ('id', '$nama_agent',
			'$role')";
		
		if(mysqli_query($conn, $sql)){
			header("Location: index.html");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

		<button onclick="window.location.href='index.html'">Back</button>

	</center>
	
</body>

</html>
