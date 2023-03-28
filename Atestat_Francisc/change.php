<?php
$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());
mysqli_select_db($c,"carti");

$NumeCol=$_POST['col'];
$NumeMod=$_POST['numemodificare'];
$NumeNou=$_POST['nume'];

mysqli_query($c,"update carti set $NumeCol='$NumeNou' where Nume like '$NumeMod';");
include("modificare.php");
$x=mysqli_query($c,"select * from carti where $NumeCol like '$NumeMod';");
if($rand=mysqli_fetch_array($x)) {echo "Cartea a fost modificata! $rand[0]$rand[1]$rand[2]";}
	else echo "Caracteristica ori numele caracteristici nu sunt corecte";
?>