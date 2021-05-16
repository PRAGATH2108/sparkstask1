<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: #c7630c;
		background-image:url("images/12.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#f59445;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Pragathi"){
				 var arr=["Priyaa","Jeni","Althaf","Gowtham","Subas","Vikashini","Srinithi","Jaishree","Dharunya"];
				 }
				 else if(a==="Priyaa"){
					var arr=["Pragathi","Jeni","Althaf","Gowtham","Subas","Vikashini","Srinithi","Jaishree","Dharunya"];
				}
				else if(a==="Jeni"){
					var arr=["Pragathi","Priyaa","Althaf","Gowtham","Subas","Vikashini","Srinithi","Jaishree","Dharunya"];
				}
				else if(a==="Althaf"){
					var arr=["Pragathi","Priyaa","Jeni","Gowtham","Subas","Vikashini","Srinithi","Jaishree","Dharunya"];
				 }
				 else if(a==="Gowtham"){
					var arr=["Pragathi","Priyaa","Jeni","Althaf","Subas","Vikashini","Srinithi","Jaishree","Dharunya"];
				 }
				 else if(a==="Subas"){
					var arr=["Pragathi","Priyaa","Jeni","Althaf","Gowtham","Vikashini","Srinithi","Jaishree","Dharunya"];
				 }
				 else if(a==="Vikashini"){
					var arr=["Pragathi","Priyaa","Jeni","Althaf","Gowtham","Subas","Srinithi","Jaishree","Dharunya"];
				 }
				 else if(a==="Srinithi"){
					var arr=["Pragathi","Priyaa","Jeni","Althaf","Gowtham","Subas","Vikashini","Jaishree","Dharunya"];
				 }
				 else if(a==="Jaishree"){
					var arr=["Pragathi","Priyaa","Jeni","Althaf","Gowtham","Subas","Vikashini","Srinithi","Dharunya"];
				 }
				 else if(a==="Dharunya"){
				 var arr=["Pragathi","Priyaa","Jeni","Althaf","Gowtham","Subas","Vikashini","Srinithi","Jaishree"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Pragathi">Pragathi</option>
			<option value="Priyaa">Priyaa</option>
			<option value="Jeni">Jeni</option>
			<option value="Althaf">Althaf</option>
			<option value="Gowtham">Gowtham</option>
			<option value="Subas">Subas</option>
			<option value="Vikashini">Vikashini</option>
			<option value="Srinithi">Srinithi</option>
			<option value="Jaishree">Jaishree</option>
			<option value="Dharunya">Dharunya</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>