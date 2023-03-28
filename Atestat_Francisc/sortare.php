<html>
<head>
<style>
body
	{
	background-color: #67d493;
	margin-left:5px;
	background-image:url("Atestat/Resources/documents/book.gif");
	background-repeat: no-repeat;
	background-attachment:fixed;
	background-position: 13cm 1cm;
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
.tit h2
	{
		font-size: 40px;
		color: #000;
		font-family: Impact;
	}	
.select
	{
		background:
	}

</style>
</head>

<body>
	<div class="tit">
		<h2>Afi&#351;eaz&#259; c&#259;r&#355;ile dup&#259;:</h2>
		<form action="afissort.php" method="post">
		<div class="select">	<select  name="categorie" >
					<option value="Nume">Nume</option>
					<option value="Autor">Autor</option>
					<option value="Categorie">Categorie</option>
					<option value="Pret">Pret</option>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Sorteaz&#259;">
		</div>
		</form>
	</div>

</body>

</html>