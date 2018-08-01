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
			
			#d
			{
				position=absolute;
				padding-right:50px;
			}
			
			#b
			{
				position=absolute;
				padding-bottom:200px;
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
			<form method='post' action='add_s.php'>
			
			<div id="d"><table width='700'> 
			
			<tr>
			<th align='right'> PLAYER ID </th>
			<td> <input type ='number_format' name='P_ID'> <font color='blue'> <?php echo @$_GET['p_id']; ?> </font>
			</td>
			</tr>

			<tr>
			<th align='right'> FORMAT ID</th>
			 
			 <td>
				 <select name='fid'>
				 <option value='null'> Select </option>
				 <option value='20'> 20 </option>
				 <option value='30'> 30 </option>
				 </select>
				
				 <font color='blue'> <?php echo @$_GET['f_id']; ?> </font>
				  </td>
			</tr>



			<tr>
			<th align='right'> BATSMAN RUNS </th>
			<td> <input type ='number_format' name='btruns'> <font color='blue'> <?php echo @$_GET['bt_runs']; ?> </font>
			</td>
			</tr>

			<tr>
			<th align='right'> MATCHES PLAYED</th>
			<td> <input type ='number_format' name='matches_played'>
			<font color='blue'> <?php echo @$_GET['m_p']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> INNINGS </th>
			<td> <input type ='number_format' name='innings'>
			<font color='blue'> <?php echo @$_GET['i']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> HIGHEST INDIVIDUAL SCORE</th>
			<td> <input type ='text' name='highest_score'>
			<font color='blue'> <?php echo @$_GET['h_scr']; ?> </font>
			 </td>
			</tr>


			<tr>
			<th align='right'> 50's </th>
			<td> <input type ='number_format' name='50s'>
			<font color='blue'> <?php echo @$_GET['fifty']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> 100's </th>
			<td> <input type ='number_format' name='100s'>
			<font color='blue'> <?php echo @$_GET['hundred']; ?> </font>
			 </td>
			</tr>



			</table> <br> <br> <br></div> 

			<div id="b"><table  width='700'>

			<tr>
			<th align='right'> WICKETS</th>
			<td> <input type ='number_format' name='no_of_wickets'>
			<font color='blue'> <?php echo @$_GET['wkt']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> BEST BOWLING </th>
			<td> <input type ='text' name='best_bowling'>
			<font color='blue'> <?php echo @$_GET['bb']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> 5W </th>
			<td> <input type ='number_format' name='5w'>
			<font color='blue'> <?php echo @$_GET['five']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> 10W</th>
			<td> <input type ='number_format' name='10w'>
			<font color='blue'> <?php echo @$_GET['ten']; ?> </font>
			 </td>
			</tr>


			<tr>
			<th align='right'> RUNS AGAINST </th>
			<td> <input type ='number_format' name='ball_runs'>
			<font color='blue'> <?php echo @$_GET['b_r']; ?> </font>
			 </td>
			</tr>


			<tr>
			<th align='right'> OVERS BOWLED</th>
			<td> <input type ='number_format' name='no_of_overs'>
			<font color='blue'> <?php echo @$_GET['overs']; ?> </font>
			 </td>
			</tr>



			<tr>
			<td align='center' colspan='15'>
			 <input type ='submit' name='submit' value='Submit'>
			 </td>
			</tr>


			</table></div>
			</form>
		</div>
	</div>
</body>
</html>


<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('cricpedia',$conn);

if(isset($_POST['submit']))

{
	$player_id= $_POST ['P_ID'];
	$format_id= $_POST ['fid'];
	$batting_runs= $_POST ['btruns'];
	$matchesplayed= $_POST ['matches_played'];
	$inn= $_POST ['innings'];
	$highest= $_POST ['highest_score'];
	
	$half_century= $_POST ['50s'];
	$century= $_POST ['100s'];
	$wickets= $_POST ['no_of_wickets'];
	$bestbowling= $_POST ['best_bowling'];
	$five_wicket= $_POST ['5w'];
	$ten_wicket= $_POST ['10w'];
	$bowler_runs= $_POST ['ball_runs'];
	$overs_bowled= $_POST ['no_of_overs'];
	
	if($player_id=='')
{
	echo "<script>window.open('add_s.php?p_id=Enter PLAYER ID','_self')</script>";
	exit();
	}

	
if($format_id=='')
{
	echo "<script>window.open('add_s.php?f_id=Enter FORMAT ID','_self')</script>";
	exit();
	}


if($batting_runs=='')
{
	echo "<script>window.open('add_s.php?bt_runs=Enter BATTING SCORES','_self')</script>";
	exit();
	}
	
	if($matchesplayed=='')
{
	echo "<script>window.open('add_s.php?m_p=Enter MATCHES PLAYED','_self')</script>";
	exit();
	}


	if($inn=='')
{
	echo "<script>window.open('add_s.php?i=ENTER INNINGS PLAYED','_self')</script>";
	exit();
	}

	if($highest=='')
{
	echo "<script>window.open('add_s.php?h_scr= Highest Score is required','_self')</script>";
	exit();
	}

	

	if($half_century=='')
{
	echo "<script>window.open('add_s.php?fifty= ENTER NO OF HALF CENTURIES','_self')</script>";
	exit();
	}
	

	
	if($century=='')
{
	echo "<script>window.open('add_s.php?hundred= ENTER NO OF CENTURIES','_self')</script>";
	exit();
	}

	if($wickets=='')
{
	echo "<script>window.open('add_s.php?wkt=ENTER NO OF WICKETS','_self')</script>";
	exit();
	}

	if($bestbowling=='')
{
	echo "<script>window.open('add_s.php?bb=ENTER BEST BOWLING FIGURES','_self')</script>";
	exit();
	}

	if($five_wicket=='')
{
	echo "<script>window.open('add_s.php?five=ENTER NO OF 5W HAULS','_self')</script>";
	exit();
	}

	if($ten_wicket=='')
{
	echo "<script>window.open('add_s.php?ten=ENTER NO OF 10W HAULS','_self')</script>";
	exit();
	}
	
	if($bowler_runs=='')
{
	echo "<script>window.open('add_s.php?b_r=ENTER RUNS AGAINST','_self')</script>";
	exit();
	}
	if($overs_bowled=='')
{
	echo "<script>window.open('add_s.php?overs=ENTER NO OF OVERS BOWLED','_self')</script>";
	exit();
	}

	$que= " insert into stats values ('$player_id','$format_id','$batting_runs','$matchesplayed','$inn','$highest' ,'$half_century','$century',
	'$wickets','$bestbowling','$five_wicket','$ten_wicket','$bowler_runs','$overs_bowled')";
	
	if(mysql_query($que))
	{echo "data has been inserted";}
}
?>