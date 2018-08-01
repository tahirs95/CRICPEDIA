<?php
session_start();

if(!$_SESSION['admin_name'])
{
	header('location:admin_login.php?error= Your are not an Administrator');

}

?>


<html>
<head>
	<meta charset="UTF-8">
	<title>
		Admin
	</title>
	
	<style>
	div.relative 
	{
		position: relative;
		width: 1330px;
		height: 500px;
		top:190px;
		left:117px;
	}

	div.head
	{
		position: relative;
		width: 1352px;
		height: 30px;
		left:-10px;
		top: 60px;
		text-align:left;
		background: #2D2C2C;
		padding-left: 250px;
		padding-top: 20px;
	}

	div.absolute1 
	{
		position: absolute;
		top: 0px;
		left:150px;
		right: 0;
		width: 1000px;
		height: 100px;
		padding-left: 7px;
		border-radius: 10px;
		text-align:center;
		font-size: 22px;
		border: 3px solid #625E5E;
	}

	div.absolute2
	{
		position: absolute;
		top: 200px;
		left: 150px;
		right: 0;
		width: 1000px;
		height: 300px;
		padding-left: 7px;
		border-radius: 10px;
		
	}

	body
	{
		background: url(img/x.jpg) no-repeat;
		background-size: 1700px 500px;
	}

	header
	{
		overflow:hidden;
	}


	li 
	{
		float: left;
		text-decoration: none;
		list-style-type: none;
		padding-right:10px;
	}

	.d a 
	{
		display: block;
		color: white;
		padding-bottom: 20px;
		text-decoration: none;
		bottom: 40px;
	}

	div.c
	{
		position: relative;
		left: 120px;
		top: 10px;
		width: 1330px;
		height: 100px;
	}

	#k
	{
		position: absolute;
		left: 27px;
		bottom: 0px;
		top: -25px;
		padding-left: 260px;
		width: 50px;
		height: 100px;
	}

	#x
	{
		position: absolute;
		top: 20px;
		height: 50px;
		left:400px;
		text-indent: 60px;
	}

	.button1
	{
		background-color: #4CAF50;
		margin-left: 20px;
		border: none;
		color: white;
		padding: 15px 50px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
		cursor: pointer;
	}

	.button2
	{
		background-color: #008CBA;
		border: none;
		color: white;
		padding: 15px 50px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
		cursor: pointer;
	}

	.button3 
	{
		background-color: #D38C49;
		border: none;
		color: white;
		padding: 15px 50px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
		cursor: pointer;
	}

	.button4 
	{
		background-color: #F2596E;
		margin-top:50px;
		border: none;
		color: white;
		padding: 15px 50px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
		cursor: pointer;
	} 

	.button5
	{
		background-color: #8A39B2;
		border: none;
		color: white;
		padding: 15px 50px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
		cursor: pointer;
	} 


	#q
	{
		position: absolute;
		left:70px;
	}

	#s
	{
		position: absolute;
		left: 803px;
	}

	#y
	{
		position: absolute;
		left: 630px;
		top:150px;
	}

	#w
	{
		position: absolute;
		top:18px;
		left: 453px;
	}
	
	#ab
	{
		position: absolute;
		top:100px;
		left: 260px;
	}

	#m
	{
		text-decoration:none;
		color: white;
	}

	h1
	{
		color:#5A315B;
		padding-left: 10px;
		padding-right: 17px;
	}
	
	#o
	{
		position: relative;
		width:95px;
		top: 20px;
		left: 1160px;
		font-size: 20px;
		padding:10px;	
	}
	
	#o a
	{
		text-decoration:none;
		color:#33FFF9;		
	}
			
	#o a:hover 
	{ 
		color: #EEBDC9;
		text-decoration:underline;
	}
	</style>
	
</head>
<body>
	<div id="o">
		<a href="logout.php"> LOG OUT </a>
	</div>
	<div class="head">
			<div id="k">
				<img src="IMG/logo.jpg" alt="error" style="width:100px;height:108px;">
			</div>
			
		<header>
			<nav>
				<ul class="n">
					<h3>
						<div id="x">
						<li class="d"><a href="f.php">HOME</a></li>
						<li class="d"><a href="countries.html">COUNTRIES</a></li>
						<li class="d"><a href="matches.php">MATCHES</a></li>
						<li class="d"><a href="ranking.php">RANKINGS</a></li>
						</div>
					</h3>	
				</ul>
			</nav>
		</header>
	</div>
	<div class="relative">
	
		<div class="absolute1">
			<h1>
				Admin Panel
			<br></h1>
		</div>
		
		<div class="absolute2">
			<br>
			<div id="q"><button class="button1"><a id="m" href="view_player.php">Player</a></button></div>
			<div id="s"><button class="button2"><a id="m" href="view_stats.php">Stats</a></button></div>
			<div id="y"><button class="button3"><a id="m" href="view_ranking.php">Ranking</a></button></div>
			<div id="w"><button class="button5"><a id="m" href="view_matches.php">Match</button></div>
			<div id="ab"><button class="button4"><a id="m" href="view_score.php">Scorecard</button></div>
		</div>
	</div>
</body>
</html>