<?php
if(isset($_POST['obrisi'])){

		$id = $_POST['oglasi'];
		$conn = new mysqli("localhost", "root", "", "nrt_13_14");
		$sql = "DELETE FROM oglasi WHERE oglas_id = '$id'";
		$result = $conn->query($sql);
		header("Location: index.php");
}



?>

<html>
<head>
	<title>Obrisi oglas</title>
</head>
<body>
	<form action="obrisi_oglas.php" method="post">
		Izaberite ID oglasa: 
		<?php
			$conn = new mysqli("localhost", "root", "", "nrt_13_14");
			$sql = "SELECT * FROM oglasi";
			$result = $conn->query($sql);
			$rows = $result->fetch_all(MYSQLI_ASSOC);

			echo "<select name='oglasi'>";
			foreach($rows as $row){
				echo "<option value='".$row['oglas_id']."'>" . $row['oglas_id'] . "</option>";
			}
			echo "</select><br>";

		?> 
	

			<br><input type="submit" name="obrisi">
	</form>
</body>
</html>