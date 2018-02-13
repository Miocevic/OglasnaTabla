<?php

$conn = new mysqli("localhost", "root", "", "nrt_13_14");
			$sql = "SELECT * FROM kategorije";
			$result = $conn->query($sql);
			$rows = $result->fetch_all(MYSQLI_ASSOC);

			foreach($rows as $row){
				echo "<a href='pretraga.php?id=".$row['kategorija_id']."'>".$row['kategorija_naslov']."</a><br>";

			}
			echo "<br>";


			

			if(isset($_GET['id'])){
				foreach ($rows as $row) {
					if($_GET['id'] == $row['kategorija_id']){
						$sql2 = "SELECT * FROM oglasi, kategorije WHERE kategorija_id=oglas_kategorija AND kategorija_id = '{$row['kategorija_id']}'";
						$result2 = $conn->query($sql2);
						$rows2 = $result2->fetch_all(MYSQLI_ASSOC);
						foreach($rows2 as $row2){
							echo "Naslov: " . $row2['oglas_naslov'] . "<br>";
							echo "Sadrzaj: ". $row2['oglas_sadrzaj'] . "<br>";
							echo "Datum: " . $row2['oglas_datum'] . "<br>";
							echo "<hr>";
						}
					}
				}
			}
			

?>