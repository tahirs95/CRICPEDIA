<?php
session_start();
?>

<html>
<head>
    <title>
		Admin Login 
	</title>
	
	<style>
		div.relative 
		{
			position: relative;
			width: 800px;
			height: 800px;
			top:110px;
			left:130px;
		}
		
		div.absolute1 
		{
			position: absolute;
			top: 0px;
			left:0;
			right: 0;
			width: 1300px;
			height: 200px;
			padding-left: 7px;
			border-radius: 10px;
			text-align: center;
			padding-top:5px;
		}

		div.absolute2
		{
			position: absolute;
			top: 250px;
			left: 0px;
			right: 100px;
			width: 1295px;
			height: 250px;
			background: white;
			padding-left: 7px;
			border-radius: 10px;
			padding-right: 7px;
		}

		body
		{
			background: url(img/x.jpg) no-repeat;
			background-size: 1700px 500px;
		}
		
		#z
		{
			position:relative;
			padding-top:0px;
			bottom:3px;
		}
		
		#f
		{
			position: absolute;
			border: 3px solid black;
			border-radius:10px;
			width: 425px;
			text-align: center;
			left: 450px;
			padding-top:-2px;
			padding-bottom: 5px;
			background: #D1D7DA;
		}
		
		#ds
			{
				position:relative;
				left: 129px;
				width:600px;
				top:25px;
			}
			

			#ds a
			{
				text-decoration:none;
				color:white;
			}
			
			#ds a:hover 
			{ 
				color: #EEBDC9;
				text-decoration:underline;
			}
	</style>
</head>
<body>
	<div id="ds">
		<a href='f.php'><h3>Back to user view</h3> </a> <br>
	</div>
	<div class="relative">
	
		<div class="absolute1">
			<img src="IMG/logo.jpg" alt="error" style="width:180px;height:200px;">
		<div>
		
		<div class="absolute2">
			<form action='admin_login.php' method='post'>
			<div id="f">
				<table width='430' height='200' align='center' >
					<tr>
						<td align='center' colspan='3' ><div id="z"><h1> Admin Login</h1></div> </td> 
					</tr>
					<tr>
						<td align='right'>User Name:</td>
						<td><input type='text' name='admin_name'></td>
					</tr>

					<tr>
						<td align='right'>Password:</td>
						<td><input type='password' name='admin_pass'></td>
					</tr>

					<tr>
						<td colspan='4' align='center'> <input type='submit' name='login' value='Login'>
					</tr>

				</table>
			</div>
			</form>
			
			<center> 
				<?php echo @$_GET['error']; ?> 
			</center>
		</div>
	</div>
</body>
</html>

<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

if(isset($_POST['login']))
{
	$admin_name= $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass=$_POST['admin_pass'];
	$query= "select * from login where user_name='$admin_name' AND user_password='$admin_pass'";
	$run=mysql_query($query);
	if(mysql_num_rows($run)>0)
	{
		echo "<script>window.open('admin_page.php?logged=Logged In successfully','_self')</script>";	
	}
		else
		{
			echo "<script>alert('Password or User Name is incorrect')</script>";
		}
}
?>








