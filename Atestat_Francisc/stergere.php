<?php
include("Stergerea.php");

$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());
mysqli_select_db($c,"carti");

$nume=$_POST["nume"];
$autor=$_POST["autor"];
$categorie = $_POST["categorie"];

if(mysqli_query($c, "select * from carti where Nume='$nume' and Autor='$autor' and Categorie='$categorie';")) {
	
	mysqli_query($c, "delete from carti where Nume='$nume' and Autor='$autor';");
	echo "Cartea $nume, a fost &#351;tears&#259;<br>";
	}
	else{
		echo "Cartea $nume, Nu a fost g&#259;sit&#259;!!!<br>";
	}

?>