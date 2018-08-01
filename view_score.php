<html>
	<head>
		<title>
			Viewing SCORECARD
		</title>
		
		<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 1000px;
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
				height: 4550px;
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
				bottom:1235px;
			}
			
			#j
			{
				position:absolute;
				height: 45px;
				top:1500px;
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
		<a href='add_score.php'> INSERT NEW RECORD </a> <br>
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
				Admin Panel <div id="o">/</div> <div id="f">Scorecard</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">
			<table align='center' width="99%">
				
				<tr align='center'>
				
					<th>Match_ID</th>
					<th>PLAYER NAME</th>
					<th>COUNTRY</th>
					
					<th>BATSMAN RUNS</th>
					<th>BALLS FACED</th>
					<th>RUNS AGAINST</th>
					<th>BALLS BOWLED</th>
					<th>WICKETS</th>
					<th>PLAYER ID</th>
					
					
				</tr>
				
				<tr align='center'>
				<?php
					$conn = mysql_connect("localhost","root","");
					$db = mysql_select_db('cricpedia',$conn);

					$que = "select * from scorecard";
					$run = mysql_query($que);

					while ($row=mysql_fetch_array($run))
					{
						$s_mid=$row[0];
						$s_pname=$row[1];
	             		$s_country=$row[2];
						$s_btruns=$row[3];
						$s_ballsfaced=$row[4];
						$s_ballruns=$row[5];
						$s_balls=$row[6];
						$s_wickets=$row[7];
						$s_pid=$row[8];
				
						
				?>
					<td align='center'><?php echo $s_mid; ?></td>
					<td align='center'><?php echo $s_pname; ?></td>
					<td align='center'><?php echo $s_country; ?></td>
					<td align='center'><?php echo $s_btruns; ?></td>
					<td align='center'><?php echo $s_ballsfaced; ?></td>
					<td align='center'><?php echo $s_ballruns; ?></td>
					<td align='center'><?php echo $s_balls; ?></td>
					<td align='center'><?php echo $s_wickets; ?></td>
					<td align='center'><?php echo $s_pid; ?></td>
				
					
					
					<td align='center'><div id="g"><a href='del_score.php?del1=<?php echo $s_mid; ?> & del2=<?php echo $s_pid;?>'>Delete</a></div></td>
					<td align='center'><div id="g"><a href='edit_score.php? edit1=<?php echo $s_mid;?>&  edit2=<?php echo $s_pid;?>' >Edit </a></div></td>
				</tr>
	
				<?php } ?>


			</table> <br><br><br>
			
			
			
	</div>
</body>
</html>
		
	