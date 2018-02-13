<?php
if(isset($_POST['dodaj'])){
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];
	$datum = $_POST['datum'];
	$kategorija = $_POST['kategorija'];

	if(empty($naslov) || empty($sadrzaj) || empty($datum) || empty($kategorija))
		echo "Morate popuniti sva polja";
	else
	{
		$conn = new mysqli("localhost", "root", "", "nrt_13_14");
		$sql = "INSERT INTO oglasi(oglas_id, oglas_naslov, oglas_sadrzaj, oglas_datum, oglas_kategorija) 
				VALUES('', '$naslov', '$sadrzaj', '$datum', '$kategorija')";
		$result = $conn->query($sql);
		echo "Dodali ste oglas";
		header("Location: index.php");

	}
}



?>

<html>
<head>
	<title>Postavi oglas</title>
</head>
<body>
	<form action="postavi_oglas.php" method="post">
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
			<br><br><input type="submit" name="dodaj">
	</form>
</body>
</html>