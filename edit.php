<?php
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('cricpedia',$conn);

	$edit_record1= $_GET['edit1'];
	$edit_record2= $_GET['edit2'];


	$que= "select * from stats where P_ID='$edit_record1' and fid='$edit_record2'";

	$run= mysql_query($que);

	while ($row=mysql_fetch_array($run))
	{
		$edit_pid=$row[0];
		$edit_fid=$row[1];
		$edit_btruns=$row[2];
		$edit_matchesplayed=$row[3];
		$edit_innings=$row[4];
		$edit_highestscore=$row[5];
		$edit_50=$row[6];
		$edit_100=$row[7];
		$edit_noofwickets=$row[8];
		$edit_bestbowling=$row[9];
		$edit_5w=$row[10];
		$edit_10w=$row[11];
		$edit_ballruns=$row[12];
		$edit_noofovers=$row[13];

	}

?>

<html>
    <head>
         <title> 
			UPDATING STATS RECORD
		</title>
    		<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 200px;
				top:110px;
				left:220px;
			}
			
			div.head
			{
				position: relative;
				width: 1100px;
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
				width: 1100px;
				height: 100px;
				padding-left: 7px;
				border-radius: 10px;
				border: 3px solid #625E5E;
			}

			div.absolute2
			{
				position: absolute;
				top: 150px;
				left: 150px;
				right: 300px;
				width: 600px;
				height: 550px;
				padding-left: 7px;
				border-radius: 10px;
				padding-right: 7px;
				margin-right:200px;
			}

			body
			{
				background: url(img/x.jpg) no-repeat;
				background-size: 1700px 500px;
			}
			
			td 
			{
				padding-top: .5em;
				padding-bottom: .5em;
			}
			
			th
			{
				font-size:18px;	
			}
			#k
			{
				position: absolute;
				left: 123px;
				bottom: 0px;
				top: -25px;
				padding-left: 100px;
				width: 50px;
				height: 100px;
			}
			
			header
			{
				overflow:hidden;
			}

			table 
			{
				border-collapse: collapse;
				width: 100%;
				border-spacing: 15px;
				right:100px;
			}
			
			#o
			{
				color: #4F6B83;
				display: inline;
			}
			
			#f
			{
				color: #178DC9;
				display: inline;
			}
			
			h1
			{
				padding-left: 5px;
				padding-right: 17px;
			}
			
			form
			{
				padding-left:180px;
			}
			
			#ds
			{
				position:relative;
				left: 225px;
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
						Admin <div id="o">/</div> Stats <div id="o">/</div> <div id="f">Update stats</div>
					<br><hr></h1>
				</div>
			
				<div class="absolute2"> 
				<form method='post' action='edit.php?edit_form=<?php echo $edit_pid; ?>&edit_form2=<?php echo $edit_fid ;?>'>

				<table width='99%'> 
					
					<tr>
						<th align='right'> PLAYER ID </th>
					<td>
						<input type ='number_format' name='pid1'  value='<?php echo $edit_pid ; ?>'  > 
					</td>
					</tr>


					<tr>
						<th align='right'> FORMAT ID</th>
						 
						<td>
							 <select name='fid1'>
							 <option value='<?php echo $edit_fid ; ?>'> <?php echo $edit_fid ; ?></option>
							 <option value='20'> 20 </option>
							 <option value='30'> 30 </option>
							 </select>
							
							 
						</td>
					</tr>


					<tr>
						<th align='right'> BATSMAN RUNS </th>
						<td> 
							<input type ='number_format' name='btruns1'  value='<?php echo $edit_btruns; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> MATCHES PLAYED </th>
						<td> 
							<input type ='number_format' name='matches_played1'  value='<?php echo $edit_matchesplayed; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> NO OF INNINGS </th>
						<td> 
							<input type ='number_format' name='innings1'  value='<?php echo $edit_innings; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> HIGHEST INDIVIDUAL SCORE </th>
						<td> 
							<input type ='text' name='highest_score1'  value='<?php echo $edit_highestscore; ?>'>  
						</td>
					</tr>



					<tr>
						<th align='right'> 50's </th>
						<td> 
							<input type ='number_format' name='50s1'  value='<?php echo $edit_50; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> 100s </th>
						<td>
							<input type ='number_format' name='100s1'  value='<?php echo $edit_100; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> WICKETS </th>
						<td> 
							<input type ='number_format' name='no_of_wickets1'  value='<?php echo $edit_noofwickets; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> BEST BOWLING FIGURES </th>
						<td> 
							<input type ='text' name='best_bowling1'  value='<?php echo $edit_bestbowling; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> 5W </th>
						<td> 
							<input type ='number_format' name='5w1'  value='<?php echo $edit_5w; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> 10W</td>
						<td> 
							<input type ='number_format' name='10w1'  value='<?php echo $edit_10w; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> RUNS AGAINST </th>
						<td> 
							<input type ='number_format' name='ball_runs1'  value='<?php echo $edit_ballruns; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'>  NO OF OVERS </th>
						<td> 
							<input type ='number_format' name='no_of_overs1'  value='<?php echo $edit_noofovers; ?>'>  
						</td>
					</tr>



					<tr>
						<td align='center' colspan='6'>
							<input type ='submit' name='update' value='Update'>
						</td>
					</tr>

				</table>
				</form>
			</div>
		</div>
	</body>
</html>

<?php


if(isset($_POST['update']))
{
	
	$edit_record1= $_GET['edit_form'];
	$edit_record2= $_GET['edit_form2'];
	
	$edit_pid1= $_POST['pid1'];
	$edit_fid1= $_POST['fid1'];
	$edit_btruns1= $_POST['btruns1'];
	$edit_matchesplayed1= $_POST['matches_played1'];
	$edit_innings1= $_POST['innings1'];
	$edit_highestscore1= $_POST['highest_score1'];
	$edit_501= $_POST['50s1'];
	$edit_1001= $_POST['100s1'];
	$edit_noofwickets1= $_POST['no_of_wickets1'];
	$edit_bestbowling1= $_POST['best_bowling1'];
	$edit_5w1= $_POST['5w1'];
	$edit_10w1= $_POST['10w1'];
	$edit_ballruns1= $_POST['ball_runs1'];
	$edit_noofovers1= $_POST['no_of_overs1'];
	
	$query1= "update stats set P_ID='$edit_pid1', fid='$edit_fid1',
	btruns='$edit_btruns1', matches_played='$edit_matchesplayed1' , innings='$edit_innings1' , 
	highest_score='$edit_highestscore1' , 50s='$edit_501', 
	100s='$edit_1001', no_of_wickets='$edit_noofwickets1', best_bowling='$edit_bestbowling1',
	5w='$edit_5w1',10w='$edit_10w1',ball_runs='$edit_ballruns1',no_of_overs='$edit_noofovers1'  
	where P_ID='$edit_pid1'   and fid='$edit_fid1' ";
	 
	if(mysql_query($query1))
	{
		echo "<script>window.open('view_stats.php?updated=Record has been updated successfully','_self')</script>";
	}	
}


?>