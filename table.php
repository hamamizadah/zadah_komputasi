<?php 
ini_set('display_errors', 1);
?>

<!DOCTYPE html>

<style> 
table, th, td {

    border: 1px solid black;
    border-collapse: collapse;

    padding: 10px;
}

</style>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "zadah_komputasi");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

        ?>

        <table>
            <tr>
                <th>Nama Agent</th>
                <th>Role</th>
                
            </tr>
            <?php
            $sql = "SELECT * FROM informasi";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["nama_agent"]. 
                    "</td><td>" . $row["role"]. 
                    "</td></tr>";
                }
            } else {
                echo "0 results";
            }

            ?>
        </table>

		<button onclick="window.location.href='index.html'">Back</button>
	</center>
	
</body>

</html>
