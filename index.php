<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "testdb1";
		
			$conn = new mysqli($servername, $username, $password, $dbname); 
			if ($conn->connect_error) {
				echo "err";
				$conn->close();
			}
			$sql = "select * from chess";
			$result = $conn->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "fide id:".$row['fideid']."-"."Name:".$row['name'];
				}
			}
			else {
				echo "No rows";
			}
			$conn->close();	
		?>
	</body>
</html>