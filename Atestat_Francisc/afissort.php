<?php
include ("sortare.php");
$n=$_POST["categorie"];
$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());
mysqli_select_db($c,"carti");
$x=mysqli_query($c,"select * from carti order by $n;");

$ech ='<table border="1" style="border-color: #fff;font-size: 20px;"><tr><th style="width: 5cm;">Nume carte</th><th style="width: 5cm;">Autor</th><th style="width: 5cm;">Categorie</th><th style="width: 5cm;">Pte&#355;</th></tr>';
echo "$ech";
while($rand=mysqli_fetch_array($x))
{
echo "<tr>";
echo "<td>$rand[0]</td> <td>$rand[1]</td> <td>$rand[2]</td><td>$rand[3] &nbsp;lei</td>";
echo "</tr>";
}
echo "</table>";
?>