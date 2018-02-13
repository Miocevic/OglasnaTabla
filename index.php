<?php
	$conn = new mysqli("localhost", "root", "", "nrt_13_14");
	$sql = "SELECT * FROM  oglasi, kategorije WHERE oglas_kategorija = kategorija_id";
	$result = $conn->query($sql);
	$rows = $result->fetch_all(MYSQLI_ASSOC);

	echo "<a href='postavi_oglas.php'>Dodaj oglas</a><br>";
	echo "<a href='azuriraj_oglas.php'>Azuriraj oglas</a><br>";
	echo "<a href='obrisi_oglas.php'>Obrisi oglas</a><br>";
	echo "<a href='pretraga.php'>Pretraga oglasa</a><br>";
	echo "<br>";
	foreach($rows as $row){
		echo "Naslov: " . $row['oglas_naslov'] . "<br>";
		echo "Sadrzaj: ". $row['oglas_sadrzaj'] . "<br>";
		echo "Datum: " . $row['oglas_datum'] . "<br>";
		echo "Kategorija: " . $row['kategorija_naslov']. "<br>";
		echo "<hr>";
	}


?>
