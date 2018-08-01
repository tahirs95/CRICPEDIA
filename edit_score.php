<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$edit_record1= $_GET['edit1'];
$edit_record2= $_GET['edit2'];


$que= "select * from scorecard where Match_id='$edit_record1' and P_ID='$edit_record2'";

$run= mysql_query($que);

while ($row=mysql_fetch_array($run))
{
	$edit_mid=$row[0];
	$edit_pname=$row[1];
	$edit_country=$row[2];
	$edit_btruns=$row[3];
	$edit_ballsfaced=$row[4];
    $edit_ballruns=$row[5];
	$edit_balls=$row[6];
	$edit_wickets=$row[7];
	$edit_pid=$row[8];
	
}
?>

<html>
    <head>
        <title>
			UPDATING SCORECARD RECORD
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
				top: 128px;
				left: 0px;
				right: 100px;
				width: 1100px;
				height: 490px;
				padding-left: 7px;
				border-radius: 10px;
				padding-right: 7px;
				margin-right:100px;
				
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
				padding-right:70px;
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
					Admin <div id="o">/</div> Scorecard <div id="o">/</div> <div id="f">Update scorecard</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 

				
		<form method='post' action='edit_score.php?edit_form=<?php echo $edit_mid; ?>  & edit_form2=<?php echo $edit_pid ;?>'>
	 
				<table width='99%'> 

					<tr>
						<th align='right'> MATCH ID </th>
						<td>
						 <input type ='number_format' name='Match_id1'  value='<?php echo $edit_mid ; ?>'  > 
						</td>
					</tr>


					<tr>
						<th align='right'> PLAYER NAME </th>
						<td> <input type ='text' name='player_name1'  value='<?php echo $edit_pname; ?>'>  
						</td>
					</tr>
					
					<tr>
						<th align='right'> COUNTRY </th>
						<td> <input type ='text' name='Country1'  value='<?php echo $edit_country; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> BATSMAN RUNS</th>
						<td> <input type ='number_format' name='bat_runs1'  value='<?php echo $edit_btruns; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> BALLS FACED</th>
						<td> <input type ='number_format' name='balls_faced1'  value='<?php echo $edit_ballsfaced; ?>'>  
						</td>
					</tr>



					<tr>
						<th align='right'> BALLS RUNS </th>
						<td> <input type ='number_format' name='ball_runs1'  value='<?php echo $edit_ballruns; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> BALLS BOWLED </td>
						<td> <input type ='number_format' name='balls1'  value='<?php echo $edit_balls; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> WICKETS </th>
						<td> <input type ='number_format' name='wickets1'  value='<?php echo $edit_wickets; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> PLAYER ID </th>
						<td> <input type ='number_format' name='P_ID1'  value='<?php echo $edit_pid; ?>'>  
						</td>
					</tr>


					<tr>
						<td align='center' colspan='15'>
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
	
	
	$edit_mid1= $_POST['Match_id1'];
	$edit_pname1= $_POST['player_name1'];
	$edit_country1= $_POST['Country1'];
	$edit_btruns1= $_POST['bat_runs1'];
	$edit_ballsfaced1= $_POST['balls_faced1'];
	$edit_ballruns1= $_POST['ball_runs1'];
	$edit_balls1= $_POST['balls1'];
	$edit_wickets1= $_POST['wickets1'];
	$edit_pid1= $_POST['P_ID1'];
	
	
	
	
	
	
	$query1= "update scorecard set Match_id='$edit_mid1', player_name='$edit_pname1',
	Country='$edit_country1',bat_runs='$edit_btruns1', balls_faced='$edit_ballsfaced1' ,
	ball_runs='$edit_ballruns1' , balls='$edit_result1' , wickets='$edit_wickets1' , P_ID='$edit_pid1' 
	where Match_id='$edit_record1' and P_ID='$edit_record2' ";
	 
	if(mysql_query($query1))
{
	echo "<script>window.open('view_score.php?updated=Record has been updated successfully','_self')</script>";
}
	
}

?>