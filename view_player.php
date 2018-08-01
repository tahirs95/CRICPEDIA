<html>
	<head>
		<title>
			Viewing player record
		</title>
	
			<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 2000px;
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
				height: 11700px;
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
				font-size:18px;
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
				bottom:12070px;
			}
			
			#j
			{
				position:absolute;
				height: 223px;
				top:11800px;
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
		<a href='add_p.php'> INSERT NEW RECORD </a> <br>
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
				Admin Panel <div id="o">/</div> <div id="f">Bio Data</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">
			<table align='center' width="99%">
				<tr align='center'>
					<th>Player ID</th>
					<th>Full Name</th>
					<th>DOB</th>
					<th>Debut Date</th>
					<th>Role</th>
					<th>Batting style</th>
					<th>Bowling style</th>
					<th>Country</th>
					<th>Image</th>
				</tr>
				
				<tr align='center'>
				<?php
					$conn = mysql_connect("localhost","root","");
					$db = mysql_select_db('cricpedia',$conn);

					$que = "select * from player";
					$run = mysql_query($que);

					while ($row=mysql_fetch_array($run))
					{
						$p_id=$row[0];
						$p_fn=$row[1];
						$p_DOB=$row[2];
						$p_db=$row[3];
						$p_role=$row[4];
						$p_btstyle=$row[5];
						$p_bwstyle=$row[6];
						$p_country=$row[7];					
				?>
					<td align='center'><?php echo $p_id; ?></td>
					<td align='center'><?php echo $p_fn; ?></td>
					<td width="80px"><?php echo $p_DOB; ?></td>
					<td align='center'><?php echo $p_db; ?></td>
					<td align='center'><?php echo $p_role; ?></td>
					<td align='center'><?php echo $p_btstyle; ?></td>
					<td align='center'><?php echo $p_bwstyle; ?></td>
					<td align='center'><?php echo $p_country; ?></td>
					<td align='center'><?php echo '<img src="data:image/png;base64,' . base64_encode($row['image']) . '" />'?></td>
					<td align='left'><div id="g"><a href='del_player.php?  del=<?php echo $p_id ; ?> '>Delete</a></div></td>
					<td align='left'><div id="g"><a href='edit_player.php? edit=<?php echo $p_id; ?>' >Edit </a></div></td>
				</tr>
	
			<?php } ?>

			</table><br><br><br><br>
			<h2>Searched Records</h2>
			<div id="h">
				<form action='view_player.php' method='get' >
				 <input type='text' name='search'>
				<input type='submit' name='submit' value='SEARCH'>
				</form>
			</div>
			<div id="j">
			<?php
				if(isset($_GET['search']))
				{
					$search_record= $_GET['search'];
					$query2=" select * from player where Full_Name='$search_record'";
					
					$run2=mysql_query($query2);
					while ($row2=mysql_fetch_assoc($run2))
				{
					$search_p_id=$row2['P_ID'];
					$search_full_name=$row2['Full_Name'];
					$search_dob=$row2['DOB'];
					$search_debut=$row2['Debut'];
					$search_role=$row2['Role'];
					$search_batting_style=$row2['Batting_style'];
					$search_bowling_style=$row2['Bowling_style'];
					$search_country=$row2['Country'];	
			?>
			
			<table align='center' width="99%">
				<tr align='center'>
	
					<td align='center'> <?php echo $search_p_id; ?> </td>
					<td align='center'> <?php echo $search_full_name; ?> </td>
					<td align='center'> <?php echo $search_dob; ?> </td>
					<td align='center'> <?php echo $search_debut; ?> </td>
					<td align='center'> <?php echo $search_role; ?> </td>
					<td align='center'> <?php echo $search_batting_style; ?> </td>
					<td align='center'> <?php echo $search_bowling_style; ?> </td>
					<td align='center'> <?php echo $search_country; ?> </td>
					<td align='center'><?php echo '<img src="data:image/png;base64,' . base64_encode($row2['image']) . '" />'?></td>
	
				</tr>
				</div>
			</table>
			<?php }} ?>
		</div>
	</div>
</body>
</html>
		
	