<?php
if(isset($_POST['azuriraj'])){
	$id = $_POST['oglasi'];
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];
	$datum = $_POST['datum'];
	$kategorija = $_POST['kategorija'];

	if(empty($id) || empty($naslov) || empty($sadrzaj) || empty($datum) || empty($kategorija))
		echo "Morate popuniti sva polja";


	else
	{
		$conn = new mysqli("localhost", "root", "", "nrt_13_14");
		$sql = "UPDATE oglasi SET oglas_naslov = '$naslov', oglas_sadrzaj = '$sadrzaj', oglas_datum = '$datum', oglas_kategorija = '$kategorija' WHERE oglas_id = '$id'";
		$result = $conn->query($sql);
		echo "Azurirali ste oglas";
		header("Location: index.php");

	}
}



?>

<html>
<head>
	<title>Azuriraj oglas</title>
</head>
<body>
	<form action="azuriraj_oglas.php" method="post">
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
		
		Naslov oglasa: <input type="text" name="naslov"><br>
		Sadrzaj oglasa: <textarea name="sadrzaj" placeholder="sadrzaj..."></textarea><br>
		Datum oglasa: <input type="date" name="datum"><br>
		Kategorija oglasa: 
		<?php
			$conn = new mysqli("localhost", "root", "", "nrt_13_14");
			$sql = "SELECT * FROM kategorije";
			$result = $conn->query($sql);
			$rows = $result->fetch_all(MYSQLI_ASSOC);

			echo "<select name='kategorija'>";
			foreach($rows as $row){
				echo "<option value='".$row['kategorija_id']."'>" . $row['kategorija_naslov'] . "</option>";
			}
			echo "</select>";

		?> 

			<br><br><input type="submit" name="azuriraj">
	</form>
</body>
</html>