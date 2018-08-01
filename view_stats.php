<html>
<head>
		<title>
			STATS RECORD
		</title>
		
		<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 1200px;
				top:110px;
				left:130px;
			}
			
			div.head
			{
				position: relative;
				width: 1350px;
				height: 30px;
				left:0px;
				top: 60px;
				text-align:left;
				padding-left: 250px;
				padding-top: 20px;
			}
			
			div.absolute1 
			{
				position: absolute;
				top: 0px;
				left:0;
				right: 0;
				width: 1300px;
				height: 100px;
				padding-left: 7px;
				border-radius: 10px;
				border: 3px solid #625E5E;
			}

			div.absolute2
			{
				position: absolute;
				top: 128px;
				left: 0px;
				right: 100px;
				width: 1295px;
				height: 3850px;
				background: white;
				padding-left: 7px;
				border-radius: 10px;
				padding-right: 7px;
				border: 3px solid #625E5E;
			}

			body
			{
				background: url(img/x.jpg) no-repeat;
				background-size: 1700px 500px;
			}
			
			#o
			{
				color: #4F6B83;
				display: inline;
			}

			header
			{
				overflow:hidden;
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

			#k
			{
				position: absolute;
				left: 31px;
				bottom: 0px;
				top: -25px;
				padding-left: 100px;
				width: 50px;
				height: 100px;
			}

			h1
			{
				padding-left: 5px;
				padding-right: 17px;
			}

			#f
			{
				color: #2F87D5;
				display: inline;
			}
			
			#p
			{
				position:relative;
				left: 129px;
				width:600px;
				top:15px;
			}
			

			#p a
			{
				text-decoration:none;
				color:white;
			}
			
			#p a:hover 
			{ 
				color: #17CCED;
				text-decoration:underline;
			}
			
			th
			{
				font-size:15px;
			}
			
			#g a
			{
				text-decoration:none;
				color:#1C9DA3;
			}
			
			#g a:hover 
			{ 
				color: #4A3FB9;
				text-decoration:underline;
			}
			
			#h
			{
				position:relative;
				left: 1050px;
				width:400px;
				bottom:4240px;
			}
			
			#j
			{
				position:absolute;
				height: 80px;
				top:3950px;
				right: 100px;
				width: 1295px;
				padding-left: 7px;
				left:0px;
				border-radius: 10px;
				padding-right: 7px;
				border: 3px solid #625E5E;
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
				color: #17CCED;
				text-decoration:underline;
			}
		</style>
	</head>
	
<body>

	<div id="p">
		<a href='add_s.php'> INSERT NEW RECORD </a> <br>
	</div>
	
	<div id="ds">
		<a href='admin_page.php'> Back to home </a> <br>
	</div>
	<div class="head">
	
		<div id="k">
			<img src="IMG/logo.jpg" alt="error" style="width:100px;height:108px;">
		</div>
	
	</div>
	<div class="relative">
	
		<div class="absolute1">
			<h1>
				Admin Panel <div id="o">/</div> <div id="f">Stats</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">
			<table align='center' width="60%">
				<tr align='center'>
				
					<th>PLAYER ID</th>
					<th>FORMAT ID</th>
					<th>BATSMAN RUNS</th>
					<th>MATCHES PLAYED</th>
					<th>NO OF INNINIGS</th>
					<th>HIGHEST INDIVIDUAL SCORE </th>
					<th>50's</th>
					<th>100's</th>
					<th>WICKETS</th>
					<th>BEST BOWLING FIGURES</th>
					<th>5W</th>
					<th>10W</th>
					<th>NO OF RUNS AGAINST</th>
					<th>NO OF OVERS BOWLED</th>
				</tr>
	
				<tr align='center'>
				<?php
				$conn = mysql_connect("localhost","root","");
				$db = mysql_select_db('cricpedia',$conn);

				$que = "select * from stats";
				$run = mysql_query($que);

				while ($row=mysql_fetch_array($run))
				{
					$s_pid=$row[0];
					$s_fid=$row[1];
					$s_btruns=$row[2];
					$s_matches_played=$row[3];
					$s_innings=$row[4];
					$s_highest_score=$row[5];
					$s_50=$row[6];
					$s_100=$row[7];
					$s_no_wickets=$row[8];
					$s_bestbowling=$row[9];
					$s_5w=$row[10];
					$s_10w=$row[11];
					$s_ballruns=$row[12];
					$s_noofovers=$row[13];
					
				?>
					<td align='center'><?php echo $s_pid; ?></td>
					<td align='center'><?php echo $s_fid; ?></td>
					<td align='center'><?php echo $s_btruns; ?></td>
					<td align='center'><?php echo $s_matches_played; ?></td>
					<td align='center'><?php echo $s_innings; ?></td>
					<td align='center'><?php echo $s_highest_score; ?></td>
					<td align='center'><?php echo $s_50; ?></td>
					<td align='center'><?php echo $s_100; ?></td>
					<td align='center'><?php echo $s_no_wickets; ?></td>
					<td align='center'><?php echo $s_bestbowling; ?></td>
					<td align='center'><?php echo $s_5w; ?></td>
					<td align='center'><?php echo $s_10w; ?></td>
					<td align='center'><?php echo $s_ballruns; ?></td>
					<td align='center'><?php echo $s_noofovers; ?></td>
		
		
		
					<td align='center'><div id="g"><a href='del_stats.php?del1=<?php echo $s_pid ; ?>       &  del2=<?php echo $s_fid ; ?>'>Delete</a></div></td>
					<td align='center'><div id="g"><a href='edit.php?edit1=<?php echo $s_pid; ?>&edit2=<?php echo $s_fid ; ?>' >Edit </a></div></td>
				</tr>
	
				<?php } ?>
				
			</table> <br><br><br>
			
			<h2>Searched Records</h2>
			<div id="h">
				<form action='view_stats.php' method='get' >
				 <input type='text' name='search'>
				<input type='submit' name='submit' value='SEARCH'>
				</form>
			</div>
			<div id="j">
			<?php
				if(isset($_GET['search']))
				{
					$search_record= $_GET['search'];
					$query2=" select * from stats where P_ID='$search_record' 	";
					
					$run2=mysql_query($query2);
					while ($row2=mysql_fetch_assoc($run2))
					{
						$search_pid=$row2['P_ID'];
						$search_fid=$row2['fid'];
						$search_btruns=$row2['btruns'];
						$search_matchesplayed=$row2['matches_played'];
						$search_innings=$row2['innings'];
						$search_highestscore=$row2['highest_score'];
						$search_50s=$row2['50s'];
						$search_100s=$row2['100s'];
						$search_noofwickets=$row2['no_of_wickets'];
						$search_bestbowling=$row2['best_bowling'];
						$search_5w=$row2['5w'];
						$search_10w=$row2['10w'];
						$search_ballruns=$row2['ball_runs'];
						$search_noofovers=$row2['no_of_overs'];

			?>
			<table align='center' width="99%">
				<tr align='center'>
	
					<td align='center'> <?php echo $search_pid; ?> </td>
					<td align='center'> <?php echo $search_fid; ?> </td>
					<td align='center'> <?php echo $search_btruns; ?> </td>
					<td align='center'> <?php echo $search_matchesplayed; ?> </td>
					<td align='center'> <?php echo $search_innings; ?> </td>
					<td align='center'> <?php echo $search_highestscore; ?> </td>
					<td align='center'> <?php echo $search_50s; ?> </td>
					<td align='center'> <?php echo $search_100s; ?> </td>
					<td align='center'> <?php echo $search_noofwickets; ?> </td>
					<td align='center'> <?php echo $search_bestbowling; ?> </td>
					<td align='center'> <?php echo $search_5w; ?> </td>
					<td align='center'> <?php echo $search_10w; ?> </td>
					<td align='center'> <?php echo $search_ballruns; ?> </td>
					<td align='center'> <?php echo $search_noofovers; ?> </td>
	
				</tr>
				</div>
			</table>
			<?php }} ?>
		</div>
	</div>
</body>
</html>