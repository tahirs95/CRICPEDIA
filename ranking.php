<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		Ranking
	</title>
	
	<style>
	div.relative 
	{
		position: relative;
		width: 1330px;
		height: 1000px;
		top:110px;
		left:117px;
	}

	div.head
	{
		position: relative;
		width: 3000px;
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
		left:0;
		right: 0;
		width: 1000px;
		height: 100px;
		padding-left: 7px;
		border-radius: 10px;
		border: 3px solid #625E5E;
	}

	div.absolute2
	{
		position: absolute;
		top: 125px;
		left: 0px;
		right: 0;
		width: 1000px;
		background: white;
		padding-left: 7px;
		border-radius: 10px;
		height:1000px;
		border: 3px solid #625E5E;
	}

	div.absolute3
	{
		position: absolute;
		top: 0px;
		left: 1030px;
		right: 0;
		width: 290px;
		height: 500px;
		padding-left: 7px;
		border-radius: 10px;
		border: 3px solid;
		background: url(IMG/mob.jpg) no-repeat;
		background-size: 300px 500px;
	}

	div.absolute4
	{
		position: absolute;
		left:0px;
		right: 0;
		width: 1330px;
		height: 40px;
		color: #505356;
		padding-left: 7px;
		top:1000px;
	}

	header
	{
		overflow:hidden;
	}

	body
	{
		background: url(IMG/x.jpg) no-repeat;
		background-size: 1700px 500px;
	}

	.n
	{
		list-style-type: none;
		margin-bottom:0px;
		overflow: hidden;
		padding-bottom: 0;
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

	a:link
	{
		text-decoration: none;
	}

	#k
	{
		position: absolute;
		left: 27px;
		bottom: 0px;
		top: -25px;
		padding-left: 100px;
		width: 50px;
		height: 100px;
	}

	#u
	{
		position: absolute;
		left: 1360px;
		bottom: 5px;
		padding-left: 0px;
		width: 0px;
	}

	#x
	{
		position: absolute;
		top: 20px;
		height: 50px;
		left:230px;
		text-indent: 40px;
	}

	table 
	{
		border-collapse: collapse;
		width: 100%;
	}

	th, td 
	{
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even)
	{
		background-color: #f2f2f2;
	}

	#f
	{
		color: #2F87D5;
		display: inline;
	}

	#o
	{
		color: #4F6B83;
		display: inline;
	}
	
	h3
	{
		color: #2F87D5;
	}
	</style>	
</head>

<body>
	<div class="c">
		<img src="IMG/caltex.jpg" alt="error" style="width:1330px;">
	</div>
	
	<div class="head">
			<div id="k">
				<img src="IMG/logo.jpg" alt="error" style="width:100px;height:108px;">
			</div>
			
			<div id="u">
				<a href="admin_login.php"><img src="IMG/login.jpg" alt="error" style="width:105px;height:30px;"></a>
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
				ICC Rankings - ODI and Twenty20 <div id="o">/</div> <div id="f">Official Team Rankings</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2" style="height:870px";>
			<h1><b>
				ICC Rankings for ODIs and Twenty20s
			</b></h1>
			
			<br><h3>
				ICC ODI Championship
			</h3>
			
			<table style="width:99%">
				<tr>
					<th>Country</th>
					<th>Rating</th>
					<th>Points</th>
				</tr>
	
				<tr align='center'>
				<?php
				$conn = mysql_connect("localhost","root","");
				$db = mysql_select_db('cricpedia',$conn);

				$que1 = "select R.Country,R.Rating,R.Points from ranking R, format F where  (R.Format_id=F.Format_id) AND (R.Format_id=20) order by R.Rating desc";
				$run = mysql_query($que1);


				while ($row=mysql_fetch_array($run))
				{
					$r_country=$row[0];
					$r_rating=$row[1];
					$r_points=$row[2];	
					

				?>
				<td align='center'><?php echo $r_country; ?></td>
				<td align='center'><?php echo $r_rating; ?></td>
				<td align='center'><?php echo $r_points; ?></td>
	
				</tr>
				<?php } ?>

			</table>
			
			<br><br><h3>
				ICC Twenty20 Championship
			</h3>

			<table style="width:99%">
			
				<tr>
					<th>Country</th>
					<th>Rating</th>
					<th>Points</th>
				</tr>
	
				<tr align='center'>
				<?php
				$conn = mysql_connect("localhost","root","");
				$db = mysql_select_db('cricpedia',$conn);

				$que = "select R.Country,R.Rating,R.Points from ranking R, format F where  (R.Format_id=F.Format_id) AND (R.Format_id=30) order by R.Rating desc";
				$run = mysql_query($que);

				while ($row=mysql_fetch_array($run))
				{
					$r_country=$row[0];
					$r_rating=$row[1];
					$r_points=$row[2];	
					

				?>
				<td align='center'><?php echo $r_country; ?></td>
				<td align='center'><?php echo $r_rating; ?></td>
				<td align='center'><?php echo $r_points; ?></td>
		
				</tr>
			
				<?php } ?>


			</table>
			
		</div>
	
		<div class="absolute3">
			
		</div>
		
		<div class="absolute4" style="top:1050px">
			<footer>
				<h5><b>SITEMAP    |    FEEDBACK    |    ABOUT US    |    PRIVACY POLICY    |    TERM OF USE</b></h5>
			</footer>
		</div>
		
	<div>
	
</body>
</html>
		
	