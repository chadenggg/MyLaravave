<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<form method="POST" action="/save">
	{{ csrf_field() }}
	<div id="wel">
		<div class="sgp">	
			<center>
				<p>Sign Up</p>
			</center>
		</div>
		<div class="box">
			<center>
			<input type="text" name="first" placeholder="First Name">
			</center>
		</div>	
		<div class="box1">
			<center>
			<input type="text" name="last" placeholder="Last Name">
			</center>
		</div>
		<div class="box2">
			<center>
			<input type="email" name="email" placeholder="Email">
			</center>
		</div>
		<div class="num">
			<center>
			<input type="number" name="age" placeholder="Age">
			</ce,bunter>
		</div>
		<div class="button">
			<center>
				<button>Register</button>
			</center>
		</div>	
	</div>
</form>	
</body>
<style type="text/css">
	body{
		background: #87CEFA;
	}
	.sgp p{
		font-family: Tahoma;
		font-size: 25pt;
		color: white;
		margin-top: 70pt;
	}
	.box input{
		height: 31pt;
		width: 230pt;
		color: white;
		font-family: tahoma;
		text-align: center;
		font-size: 13pt;
	    background-color: #87CEFA;
	    border: 1px ridge;
	    opacity: 1;
	    border-radius: 3pt;
	}
	::-webkit-input-placeholder {
		color: white;
	}
	.box1 input{
		height: 31pt;
		width: 230pt;
		color: white;
		font-family: tahoma;
		text-align: center;
		font-size: 13pt;
	    background-color: #87CEFA;
	    border: 1px ridge;
	    opacity: 1;
	    border-radius: 3pt;
	    margin-top: 10pt;
	}
	.box2 input{
		height: 31pt;
		width: 230pt;
		color: white;
		font-family: tahoma;
		text-align: center;
		font-size: 13pt;
	    background-color: #87CEFA;
	    border: 1px ridge;
	    opacity: 1;
	    border-radius: 3pt;
	    margin-top: 10pt;
	}
	.num input{
		height: 31pt;
		width: 230pt;
		color: white;
		font-family: tahoma;
		text-align: center;
		font-size: 13pt;
	    background-color: #87CEFA;
	    border: 1px ridge;
	    opacity: 1;
	    border-radius: 3pt;
	    margin-top: 10pt;
	}
	.button button{
		height: 31pt;
		width: 230pt;
		color: green;
		font-family: tahoma;
		text-align: center;
		font-size: 13pt;
	    background-color: white;
	    border: 1px ridge;
	    opacity: 1;
	    border-radius: 3pt;
	    margin-top: 10pt;
	}

</style>
</html>