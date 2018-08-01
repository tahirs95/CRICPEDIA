<html>
	<head>
		<title>
			Viewing match record
		</title>
		
		<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 900px;
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
				height: 550px;
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
				bottom:910px;
			}
			
			#j
			{
				position:absolute;
				height: 40px;
				top:650px;
				right: 100px;
				width: 1295px;
				padding-left: 7px;
				left:0px;
				border-radius: 10px;
				padding-right: 7px;
				border: 3px solid #625E5E;
			}
		</style>
	</head>
	
<body>

	<div id="p">
		<a href='add_m.php'> INSERT NEW RECORD </a> <br>
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
				Admin Panel <div id="o">/</div> <div id="f">Matches</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">
			<table align='center' width="99%">
				
				<tr align='center'>
				
					<th>Match_ID</th>
					<th>Team1</th>
					<th>Team2</th>
					<th>Venue</th>
					<th>Match_Date</th>
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

					$que = "select * from matches";
					$run = mysql_query($que);

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
					<td align='center'><?php echo $m_id; ?></td>
					<td align='center'><?php echo $m_t1; ?></td>
					<td align='center'><?php echo $m_t2; ?></td>
					<td align='center'><?php echo $m_venue; ?></td>
					<td align='center'><?php echo $m_date; ?></td>
					<td align='center'><?php echo $m_result; ?></td>
					<td align='center'><?php echo $m_t1score; ?></td>
					<td align='center'><?php echo $m_t2score; ?></td>
					<td align='center'><?php echo $m_fid; ?></td>
					<td align='center'><?php echo $m_t1bat; ?></td>
					<td align='center'><?php echo $m_t1bowl; ?></td>
					<td align='center'><?php echo $m_t2bat; ?></td>
					<td align='center'><?php echo $m_t2bowl; ?></td>
					<td align='center'><div id="g"><a href='del_matches.php?del=<?php echo $m_date ; ?> '>Delete</a></div></td>
					<td align='center'><div id="g"><a href='edit_matches.php? edit=<?php echo $m_id; ?>' >Edit </a></div></td>
				</tr>
	
				<?php } ?>


			</table> <br><br><br>
			
			<h2>Searched Records</h2>
			<div id="h">
				<form action='view_matches.php' method='get' >
				<input type='text' name='search'>
				<input type='submit' name='submit' value='SEARCH'>
				</form>
			</div>
			
			<div id="j">
			<?php
				if(isset($_GET['search']))
				{
					$search_record= $_GET['search'];
					$query2=" select * from matches where Team1='$search_record' OR Team2='$search_record' OR
					Match_id='$search_record'	";
					
					$run2=mysql_query($query2);
					while ($row2=mysql_fetch_assoc($run2))
					{
						$search_match_id=$row2['Match_id'];
						$search_team1=$row2['Team1'];
						$search_team2=$row2['Team2'];
						$search_venue=$row2['Venue'];
						$search_matchdate=$row2['Match_date'];
						$search_result=$row2['Result'];
						$search_t1scr=$row2['T1_score'];
						$search_t2scr=$row2['T2_score'];
						$search_formatid=$row2['Format_id'];
						$search_t1batting=$row2['T1_batting'];
						$search_t1bowling=$row2['T1_bowling'];
						$search_t2batting=$row2['T2_batting'];
						$search_t2bowling=$row2['T2_bowling'];

			?>
			
			<table align='center' width="99%">
				<tr align='center'>
	
					<td align='center'> <?php echo $search_match_id; ?> </td>
					<td align='center'> <?php echo $search_team1; ?> </td>
					<td align='center'> <?php echo $search_team2; ?> </td>
					<td align='center'> <?php echo $search_venue; ?> </td>
					<td align='center'> <?php echo $search_matchdate; ?> </td>
					<td align='center'> <?php echo $search_result; ?> </td>
					<td align='center'> <?php echo $search_t1scr; ?> </td>
					<td align='center'> <?php echo $search_t2scr; ?> </td>
					<td align='center'> <?php echo $search_formatid; ?> </td>
					<td align='center'> <?php echo $search_t1batting; ?> </td>
					<td align='center'> <?php echo $search_t1bowling; ?> </td>
					<td align='center'> <?php echo $search_t2batting; ?> </td>
					<td align='center'> <?php echo $search_t2bowling; ?> </td>
					
				</tr>
				</div>
			</table>
			<?php }} ?>
		</div>
	</div>
</body>
</html>
		
	