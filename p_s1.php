<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		Player
	</title>
	
	<style>
	div.relative 
	{
		position: relative;
		width: 1330px;
		height: 1280px;
		top:110px;
		left:117px;
	}

	div.head
	{
		position: relative;
		width: 1350px;
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
		width: 1005px;
		height: 100px;
		padding-left: 7px;
		border-radius: 10px;
		border: 3px solid #625E5E;
		padding-right: 7px;
	}

	div.absolute2
	{
		position: absolute;
		top: 125px;
		left: 0px;
		right: 0;
		height:1050px;
		width: 1005px;
		background: white;
		padding-left: 7px;
		border-radius: 10px;
		border: 3px solid #625E5E;
		padding-right:7px;}
	

	div.absolute3
			{
				position: absolute;
				top: -130px;
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
		top:1150px;
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
	
	#y a
	{
		text-decoration:none;
		color:#1C9DA3;
	}
			
	#y a:hover 
	{ 
		color: #4A3FB9;
		text-decoration:underline;
	}
	
	#t
	{
		position:absolute;
		bottom:820px;
		left:840px;
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
				Players
			<br><hr></h1>
		</div>
		
		<div class="absolute2" ><table align='center' width='1000' border='4'>
	
	
	
	
	<tr align='center'>

<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$stats_record= $_GET['stats'];


	$query1="select P.Full_Name,P.DOB,P.Debut,P.Role,P.Batting_style,P.Bowling_style,P.Country,P.image,S.fid,S.btruns,S.matches_played,S.innings,
S.highest_score,S.50s,S.100s,S.no_of_wickets,S.best_bowling,S.5w,S.10w,S.ball_runs,
S.no_of_overs,ROUND(S.btruns/S.innings,2), ROUND(S.ball_runs/S.no_of_wickets,2), ROUND(S.ball_runs/S.no_of_overs,2)
from player P ,stats S where (P.P_ID=S.P_ID) AND P.P_ID='$stats_record' AND S.fid=20	";
	
	$run1=mysql_query($query1);
	while ($row=mysql_fetch_array($run1))
{
	
	
	$p_fn1=$row[0];
	$p_DOB1=$row[1];
	$p_db1=$row[2];
	$p_role1=$row[3];
	$p_btstyle1=$row[4];
	$p_bwstyle1=$row[5];
	$p_country1=$row[6];
	$p_image=$row[7];
	
	
	$s_fid1=$row[8];
	$s_btruns1=$row[9];
	$s_matches_played1=$row[10];
	$s_innings1=$row[11];
	
	
	$s_highest_score1=$row[12];
	$s_501=$row[13];
	$s_1001=$row[14];
	$s_no_wickets1=$row[15];
	$s_bestbowling1=$row[16];
	$s_5w1=$row[17];
	$s_10w1=$row[18];
	$s_ballruns1=$row[19];
	$s_noofovers1=$row[20];
	$s_btavg1=$row[21];
	$s_ballavg1=$row[22];
	$s_eco1=$row[23];
	
	?>
	<table width='800' align='center' border='1'>
	
	
		<h4>FULL NAME</h4><?php echo $p_DOB1; ?>
		<h4>Debut Date</h4><?php echo $p_db1; ?>
		<h4>ROLE</h4><?php echo $p_role1; ?>
		<h4>BATTING STYLE</h4><?php ecHo $p_btstyle1; ?>
		<h4>BOWLING STYLE</h4><?php echo $p_bwstyle1; ?>
		<h4>COUNTRY</h4><?php echo $p_country1; ?>
		<div id="t"><?php echo '<img src="data:image/png;base64,' . base64_encode($row['image']) . '" />'?></div>
		
		<br><br><h3>ODI<h3>
		<h4>BATTING AND BOWLING<h4>
		<table width='800' align='center' border='1'>
		<tr>
		<th>Batting runs</th>
		<th>Matches played</th>
		<th>Innings</th>
		<th>Highest Score</th>
		<th>50's</th>
		<th>100's</th>
		<th>Batting average</th>
		</tr>
		<tr>
		<td align='center'><?php echo $s_btruns1; ?></td>
		<td align='center'><?php echo $s_matches_played1; ?></td>
		<td align='center'><?php echo $s_innings1; ?></td>
		<td align='center'><?php echo $s_highest_score1; ?></td>
		<td align='center'><?php echo $s_501; ?></td>
		<td align='center'><?php echo $s_1001; ?></td>
		<td align='center'><?php echo $s_btavg1; ?></td>
		</tr>
		

		<tr>
		<th>Number of wickets</th>
		<th>Best bowling</th>
		<th>5W</th>
		<th>10W</th>
		<th>Bowling average</th>
		<th>Economy</th>
		</tr>
		<td align='center'><?php echo $s_no_wickets1; ?></td>
		<td align='center'><?php echo $s_bestbowling1; ?></td>
		<td align='center'><?php echo $s_5w1; ?></td>
		<td align='center'><?php echo $s_10w1; ?></td>
		<td align='center'><?php echo $s_ballavg1; ?></td>
		<td align='center'><?php echo $s_eco1; ?></td>
		
		
		</tr>
		
		<div class="absolute4" style="top:1100px">
			<footer>
				<h5><b>SITEMAP    |    FEEDBACK    |    ABOUT US    |    PRIVACY POLICY    |    TERM OF USE</b></h5>
			</footer>
		</div>
	
	<?php } ?>
	</table>
	
	
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$stats_record= $_GET['stats'];


	$query1="select P.Full_Name,P.DOB,P.Debut,P.Role,P.Batting_style,P.Bowling_style,P.Country,S.fid,S.btruns,S.matches_played,S.innings,
S.highest_score,S.50s,S.100s,S.no_of_wickets,S.best_bowling,S.5w,S.10w,S.ball_runs,
S.no_of_overs,ROUND(S.btruns/S.innings,2), ROUND(S.ball_runs/S.no_of_wickets,2), ROUND(S.ball_runs/S.no_of_overs,2)
from player P ,stats S where (P.P_ID=S.P_ID) AND P.P_ID='$stats_record' AND S.fid=30	";
	
	$run1=mysql_query($query1);
	while ($row=mysql_fetch_array($run1))
{
	
	
	$p_fn1=$row[0];
	$p_DOB1=$row[1];
	$p_db1=$row[2];
	$p_role1=$row[3];
	$p_btstyle1=$row[4];
	$p_bwstyle1=$row[5];
	$p_country1=$row[6];
	
	
	$s_fid1=$row[7];
	$s_btruns1=$row[8];
	$s_matches_played1=$row[9];
	$s_innings1=$row[10];
	
	
	$s_highest_score1=$row[11];
	$s_501=$row[12];
	$s_1001=$row[13];
	$s_no_wickets1=$row[14];
	$s_bestbowling1=$row[15];
	$s_5w1=$row[16];
	$s_10w1=$row[17];
	$s_ballruns1=$row[18];
	$s_noofovers1=$row[19];
	$s_btavg1=$row[20];
	$s_ballavg1=$row[21];
	$s_eco1=$row[22];
	
	?>
	<table width='800' align='center' border='1'>
	
	
		
		
		<br><br><h3>T20<h3>
		<h4>BATTING AND BOWLING<h4>
		<table width='800' align='center' border='1'>
		<tr>
		<th>Batting runs</th>
		<th>Matches played</th>
		<th>Innings</th>
		<th>Highest Score</th>
		<th>50's</th>
		<th>100's</th>
		<th>Batting average</th>
		</tr>
		<tr>
		<td align='center'><?php echo $s_btruns1; ?></td>
		<td align='center'><?php echo $s_matches_played1; ?></td>
		<td align='center'><?php echo $s_innings1; ?></td>
		<td align='center'><?php echo $s_highest_score1; ?></td>
		<td align='center'><?php echo $s_501; ?></td>
		<td align='center'><?php echo $s_1001; ?></td>
		<td align='center'><?php echo $s_btavg1; ?></td>
		</tr>
		
		
		<tr>
		<th>Number of wickets</th>
		<th>Best bowling</th>
		<th>5W</th>
		<th>10W</th>
		<th>Bowling average</th>
		<th>Economy</th>
		</tr>
		<td align='center'><?php echo $s_no_wickets1; ?></td>
		<td align='center'><?php echo $s_bestbowling1; ?></td>
		<td align='center'><?php echo $s_5w1; ?></td>
		<td align='center'><?php echo $s_10w1; ?></td>
		<td align='center'><?php echo $s_ballavg1; ?></td>
		<td align='center'><?php echo $s_eco1; ?></td>
		
		
		</tr>
		
		
	
	<?php } ?>
	</table>

	<div class="absolute3"?
	</div>


	
	
	</body>
</html>






