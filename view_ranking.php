
<html>
	<head>
		<title>
			Ranking records
		</title>
		
		<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 500px;
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
			
			th
			{
				font-size:27px;
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
				bottom:995px;
			}
			
			#j
			{
				position:absolute;
				height: 80px;
				top:680px;
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
		<a href='add_r.php'> INSERT NEW RECORD </a> <br>
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
				Admin Panel <div id="o">/</div> <div id="f">Ranking</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">
			<table align='center' width="99%">
				<tr align='center'>
					<br>
					<th>Country</th>
					<th>Format_ID</th>
					<th>Rating</th>
					<th>Points</th>
				</tr>
		
				<tr align='center'>
				<?php
				$conn = mysql_connect("localhost","root","");
				$db = mysql_select_db('cricpedia',$conn);

				$que = "select * from ranking";
				$run = mysql_query($que);

				while ($row=mysql_fetch_array($run))
				{
					$r_country=$row[0];
					$r_fid=$row[1];
					$r_rating=$row[2];
					$r_points=$row[3];	
					

				?>
					<td align='center'><?php echo $r_country; ?></td>
					<td align='center'><?php echo $r_fid; ?></td>
					<td align='center'><?php echo $r_rating; ?></td>
					<td align='center'><?php echo $r_points; ?></td>
					<td align='center'><div id="g"><a href='del_r.php?  del1=<?php echo $r_country ; ?>  &  del2=<?php echo $r_fid ; ?>'>Delete</a><div></td>
					<td align='center'><div id="g"><a href='edit_ranking.php?   edit1=<?php echo $r_country; ?> &  edit2=<?php echo $r_fid ; ?>' >Edit </a><div></td>
			
				</tr>
		
				<?php } ?>
			</table><br><br><br>
			<h2>Searched Records</h2>
			<div id="h">
				<form action='view_ranking.php' method='get' >
				<input type='text' name='search'>
				<input type='submit' name='submit' value='SEARCH'>
				</form>
			</div>
			<div id="j">
			<?php
			if(isset($_GET['search']))
			{
				$search_record= $_GET['search'];
				$query2=" select * from ranking where Country='$search_record' OR Format_id='$search_record'";
				
				$run2=mysql_query($query2);
				while ($row2=mysql_fetch_assoc($run2))
				{
					$search_country=$row2['Country'];
					$search_fid=$row2['Format_id'];
					$search_rating=$row2['Rating'];
					$search_points=$row2['Points'];	
			?>
			<table width="99%">
					<tr align='center'>
						<td align='center'> <?php echo $search_country; ?> </td>
						<td align='center'> <?php echo $search_fid; ?> </td>
						<td align='center'> <?php echo $search_rating; ?> </td>
						<td align='center'> <?php echo $search_points; ?> </td>
					</tr>
			</div>
			</table>
			<?php }} ?>
		</div>	
	</div>
</body>
</html>
		
	