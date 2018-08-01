<html>
	<head>
		<title>
			Summary
		</title>
		
		<style>
			div.relative 
			{
				position: relative;
				width: 1330px;
				height: 800px;
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
				padding-right: 7px;
				border-radius: 10px;
				border: 3px solid #625E5E;
			}
			
			div.absolute2
			{
				position: absolute;
				top: 125px;
				left: 0px;
				right: 0;
				width: 1005px;
				height:600px;
				padding-left: 7px;
				border-radius: 10px;
				border: 3px solid #625E5E;
				background: url(IMG/Lords.jpg) no-repeat;
				background-size: 1030px 600px;	
			}
			
			
			
			
			header
			{
				overflow:hidden;
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
			
			body
			{
				background: url(IMG/x.jpg) no-repeat;
				background-size: 1700px 500px;
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
				top:950px;
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
				<a href="#"><img src="IMG/login.jpg" alt="error" style="width:105px;height:30px;"></a>
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
				Match <div id="o">/</div> <div id="f">Summary</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">
			<table width='99%'>
				<tr align='center'>
				
					<th>Team 1</th>
					<th>Team 2</th>
					<th>Result</th>
					<th>T1_score</th>
					<th>T2_score</th>
					<th>Format_ID</th>
					<th>Team 1 Best Batsman</th>
					<th>Team 1 Best Bowler</th>
					<th>Team 2 Best Batsman</th>
					<th>Team 2 Best Bowler</th>
				</tr>
				
				<tr align='center'>

			<?php
			$conn = mysql_connect("localhost","root","");
			$db = mysql_select_db('cricpedia',$conn);

			$summary_record= $_GET['summary'];


			$que= "select * from matches where Match_id='$summary_record' ";

			$run= mysql_query($que);

			while ($row=mysql_fetch_array($run))
			{
				$m_id=$row[0];
				$m_t1=$row[1];
				$m_t2=$row[2];
				$m_venue=$row[3];
				$m_date=$row[4];
				$m_result=$row[5];
				$m_t1score=$row[6];
				$m_t2score=$row[7];
				$m_fid=$row[8];
				$m_t1bat=$row[9];
				$m_t1bowl=$row[10];
				$m_t2bat=$row[11];
				$m_t2bowl=$row[12];
				
			?>
					<td align='center'><?php echo $m_t1; ?></td>
					<td align='center'><?php echo $m_t2; ?></td>
					<td align='center'><?php echo $m_result; ?></td>
					<td align='center'><?php echo $m_t1score; ?></td>
					<td align='center'><?php echo $m_t2score; ?></td>
					<td align='center'><?php echo $m_fid; ?></td>
					<td align='center'><?php echo $m_t1bat; ?></td>
					<td align='center'><?php echo $m_t1bowl; ?></td>
					<td align='center'><?php echo $m_t2bat; ?></td>
					<td align='center'><?php echo $m_t2bowl; ?></td>
					
				</tr>
				
			<?php } ?>


			</table> <br><br><br>
		</div>
		
		<div class="absolute3">
			
		</div>
		
		<div class="absolute4" style="top:950px">
			<footer>
				<h5><b>SITEMAP    |    FEEDBACK    |    ABOUT US    |    PRIVACY POLICY    |    TERM OF USE</b></h5>
			</footer>
		</div>
	</div>
	</body>
</html>