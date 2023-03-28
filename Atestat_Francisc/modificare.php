<html>
<head>

<style>

body
	{
		background-color: #5364e0;
		margin-left: 5px;
		background-attachment:fixed;
		
	}
a1
	{
		font-family:Cooper Black;
		font-size:30px;
		font-style:normal;

	}
.continut
	{
		position:relative;
		width: 400px;
		padding: 40px;
		background: #216dc7;
		margin-left: 200px;
	}
continut h2
	{
		color: #000;
		margin-bottom: 45px;
	}	
.input
	{
		position: relative;
		width: 100%;
		height: 30px;
	}
.input input[type="text"]
	{
		position: absolute;
		background: transparent;
		border: none;
		box-shadow: none;
		font size: 16px;
		color: #fff;
		width: 100%;
		height: 30px;
	}
.input label
	{
		position: absolute;
		top: 0;
		left: 0;
		color: #999;
		pointer-events: none;
		display: block;
		transition: 0.5s;
	}
.input input[type="text"]:focus + label,
.input input[type="text"]:valid + label
	{
		transform: translateY(-23px);
		font-size: 14px;
		color: #fff;
		background: #ff006a;
		padding: 2px 6px;
	}
.input span
	{
		position: absolute;
		bottom: 0;
		right: 0;
		display: block;
		background: #fff;
		width: 100%;
		height: 2px;
	}	
.input span:before
	{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #00b0ff;
		transform: scaleX(0);
		transform-origin: right;
		transition: transform 0.5s ease-in-out; 
	}
.input input[type="text"]:focus ~ span:before,
.input input[type="text"]:valid ~ span:before
	{
		transform: scaleX(1);
		transform-origin: left;
		transition: transform 0.5s ease-in-out; 
	}
.btn
	{
		margin-top: 20px;
		border: none;
		box-shadow: none;
		padding: 10px 25px;
		background: #5386e0;
		color: #fff;
		font size 16px;
		cursor: pointer;
		margin-left: 3cm;
	}
.btn:hover
	{
		background: #00bcd4;
	}

</style>

</head>

<img src="Atestat/Resources/documents/unnamed.gif" width="350" height="200" align="right" > 

<body>
<div>
	<div class="continut">
		<h2>Introduce Datele:</h2>
			<form method="post" action="http://localhost/change.php">
				<div class="input">
					<input type="text" name="col" required="">
					<label>Introduce numele tipului de caracteristic&#259;</label>
					<span></span>
				</div>
				<br>
				<br>
				<div class="input">
					<input type="text" name="numemodificare" required="">
					<label>Introduce nume carte</label>
					<span></span>
				</div>
				<br>
				<br>
				<div class="input">
					<input type="text" name="nume" required="">
					<label>Introduce noul nume al caracteristicii</label>
					<span></span>
				</div>
				<input type="submit" value="    Modific&#259;    " class="btn">
			</form>
		
	</div>
</div>
<br>
<br>
</body>
</html>
