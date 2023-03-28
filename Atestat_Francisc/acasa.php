<html>
<head>
<style>
body
	{
		vertical-align: top;
	}	
img
	{
		width: 175px;
		height: 200px;
	}
</style>
</head>

<body>
<div >
<table border="0" style="border-color: #fff; font-size: 20px;" >
<tr>
	<td style="width: 31cm;background: #5f84ce;">&nbsp;</td>
</tr>
</table>
<table border="1" style="border-color: #fff;font-size: 20px;">
<tr>
<th style="width: 10cm;">Imagine</th>	
<th style="width: 5cm;">Nume carte</th>
<th style="width: 5cm;">Autor</th>
<th style="width: 5cm;">Categorie</th>
<th style="width: 5cm;">Pte&#355;</th>
</tr>
<?php
$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());
mysqli_select_db($c,"carti");
$x=mysqli_query($c,"select * from carti");

while($rand=mysqli_fetch_array($x))
{

echo "<tr>";
echo "<td>";
echo '<img src="';
echo "$rand[4]";
echo '" alt="book">';
echo "</td> <td>$rand[0]</td> <td>$rand[1]</td> <td>$rand[2]</td> <td>$rand[3] &nbsp;lei</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>

</html>