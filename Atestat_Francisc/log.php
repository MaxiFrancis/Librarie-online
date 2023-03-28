<?php

//creare baza de date si tabel
$c=mysqli_connect("localhost","root","admin") or die(mysqli_error());
mysqli_query($c, "create datatbase carti;");
mysqli_select_db($c,"carti");
mysqli_query($c, "create table carti(Nume char(100),Autor char(50),Categorie char(50),Pret int,imagine char(255) default 'Atestat/Resources/documents/BOOK_DEFAULT.jpg');");


mysqli_query($c, "insert into carti values('Luceafarul', 'Mihai Eminescu', 'Romantism', 7, 'Atestat/Resources/documents/uploads/314254-OKTN.jpg');") or die(mysqli_error($c));
mysqli_query($c, "insert into carti values('Morometii', 'Marin Preda', 'Literatura Romana', 70, 'Atestat/Resources/documents/uploads/res_16c28cb6928db85219e8f5d303f06fcf_450x450_k5qd.jpg');") or die(mysqli_error($c));
mysqli_query($c, "insert into carti values('Origini', 'Dan Brown', 'Literatura universala', 50, 'Atestat/Resources/documents/uploads/13294289-KMHN.jpg');") or die(mysqli_error($c));
mysqli_query($c, "insert into carti values('Creierul si Mintea Universului', 'Dumitru Constantin Dulcan', 'Fictiune', 55, 'Atestat/Resources/documents/uploads/10904913-CTOG.jpg');") or die(mysqli_error($c));
mysqli_query($c, "insert into carti values('Limba si literatura Romana - Bacalaureat. 80 de teste complete', 'Mimi Dumitrache, Dorica Boltasu Nicolae', 'Culegeri', 20, 'Atestat/Resources/documents/uploads/1192454.jpg');") or die(mysqli_error($c));



$name=$_POST['name'];
$pwd=$_POST['pwd'];
if($name=='Proprietar' and $pwd=='0000') {include("file:///D:/php/Atestat/Resources/interface.html"); }
	else if($name!='Proprietar' and $pwd!='0000') 
	{
		include("file:///D:/php/Atestat/index.html"); echo "Date incorecte!";
		}
		else if($name=='Proprietar') 
			{
			include("file:///D:/php/Atestat/index.html"); echo "Parol&#259; incorect&#259;!";
			}
				else {
					include("file:///D:/php/Atestat/index.html"); echo "Username incorect!";
				}
?>