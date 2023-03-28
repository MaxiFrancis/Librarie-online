<html>
<head>

	<style>

	body
		{
			background-color: #1e6cc7;
			margin-left: 50px;
			background-attachment: fixed;
			background-image: url("Atestat/Resources/documents/bookshelf.gif");
			background-repeat: no-repeat;
			background-position: 9cm -3cm;
		}

	a1
		{
			font-family:Cooper Black;
			font-size:30px;
			font-style:normal;

		}
	.btn
		{
			border: none;
			box-shadow: none;
			padding: 10px 25px;
			background: #5386e0;
			color: #fff;
			font size 16px;
			cursor: pointer;
			margin-left: 8cm;
		}
	.btn:hover
		{
			background: #00bcd4;
		}



	</style>

</head>
<body>
<form action="http://localhost/adauga.php" method="post" enctype="multipart/form-data">
 	<a1>Adaugare produs:
	</a1>
	<br><br>
<table style="border:10px outset #1e0ccf;maegin-left:15px" >
	<tr>
		<td>Numele c&#259;r&#539;i: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 	
		<td><input type="text" name="nume"></td>   
	</tr>

	</tr>
		<td>Numele Autorului:</td>   
		<td><input type="text" name="autor"></td>
	</tr>

	<tr>
		<td>Categorie:</td>   
		<td><select  name="categorie" >
				<option value="Romantism">Romantism</option>
				<option value="Mister">Mister</option>
				<option value="Aventur&#259;">Aventur&#259;</option>
				<option value="Dram&#259;">Dram&#259;</option>
				<option value="Fic&#355;iune">Fic&#355;iune</option>
				<option value="Parenting">Parenting</option>
				<option value="Manuale &#351;colare">Manuale &#351;colare</option>
				<option value="Literatura Rom&#226;n&#259;">Literatura Rom&#226;n&#259;</option>
				<option value="Culegeri">Culegeri</option>
				<option value="Pove&#351;ti">Pove&#351;ti</option>
				<option value="C&#259;r&#355;i educative">C&#259;r&#355;i educative</option>
				
			</select>


		</td>
		
	</tr>
	
	<tr>
		<td>Imagine:</td>
			
		<td><input type="file" name="file">
	</tr>
	
	<tr>
		<td>Pre&#539;:</td>
		<td><input type="text" name="pret">&nbsp;lei</td>
	</tr>
	
</table>
<br>
<input type="submit" value="    Adaug&#259;    " class="btn">
</form>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
