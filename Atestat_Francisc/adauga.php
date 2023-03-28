<?php
include("Adaugare.php");
	
//preluare si introducere valori	
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$nume=$_POST["nume"];
	$autor=$_POST["autor"];
	$categorie=$_POST["categorie"];
	$pret=$_POST["pret"];

//conectare la mysqli
$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());

//creare baza de date si tabel
mysqli_query($c, "create datatbase carti;");
mysqli_select_db($c,"carti");
mysqli_query($c, "create table carti(Nume char(100),Autor char(50),Categorie char(50),Pret int,imagine char(255) default 'Atestat/Resources/documents/BOOK_DEFAULT.jpg');");


	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg','png');
if(in_array($fileActualExt, $allowed)) {
	if($fileError === 0) {
		if($fileSize < 1000000) {
			$fileNameNew = uniqid('',true).".".$fileActualExt;
			$fileDestination = 'Atestat/Resources/documents/uploads/'.$fileName;
			move_uploaded_file($fileTmpName, $fileDestination);
	}else{
	echo "Imaginea e prea mare!";
	}
	
	}else{
	echo "A fost &#238;nt&#226;mpinat&#259; o eroare la ad&#259;ugarea imaginii!";
	}
	
}else {
	echo "Nu po&#355;i ad&#259;uga imagini de acest tip!";

	
}

//Adăugare produs
mysqli_query($c, "insert into carti values('$nume', '$autor', '$categorie', $pret, '$fileDestination');") or die(mysqli_error($c));
echo "Carte adaugata:<br>Nume: &nbsp; $nume <br> Autor:&nbsp;$autor <br> Categorie: &nbsp; $categorie <br> Cu pretul:&nbsp;$pret";
?>