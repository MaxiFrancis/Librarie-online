
<?php
	include("cautare.php");

$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());
mysqli_select_db($c,"carti");

$nume=$_POST['nume'];
$x=mysqli_query($c,"select * from carti where nume like '$nume';");

$ech ='<table border="1" style="border-color: #fff;font-size: 20px;"><tr><th style="width: 8cm;">Nume carte</th><th style="width: 8cm;">Categorie</th><th style="width: 8cm;">Pte&#355;</th></tr>';


if(!mysqli_fetch_array($x)) {echo "$ech";
	echo "Cartea nu a fost gasit&#259; &#238;n baza de date";
	echo "<tr>";
	echo "<td>Niciuna</td> <td>&nbsp</td> <td>&nbsp;</td>";
	echo "</tr>";
	}
	else {echo "$ech";
		$x=mysqli_query($c,"select * from carti where Nume like'$nume';");
	while($rand=mysqli_fetch_array($x))
	{
	echo "<tr>";
	echo "<td>$rand[0]</td> <td>$rand[1]</td> <td>$rand[2]</td>";
	echo "</tr>";
	}
	}

?>

