<html>
    <head>
        <title> 
			UPDATING RANKING
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
				left: -100px;
				right: 350px;
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
					Admin <div id="o">/</div> Scorecard <div id="o">/</div> <div id="f">Add scorecard</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 
			
<form method='post' action='add_score.php'>
<table width='700'> 

<tr>
<th align='right'> MATCH ID </th>
<td> <input type ='number_format' name='Match_id'> <font color='blue'> <?php echo @$_GET['s_mid']; ?> </font>
</td>
</tr>



<tr>
<th align='right'> PLAYER NAME </th>
<td> <input type ='text' name='player_name'>  <font color='blue'> <?php echo @$_GET['s_pname']; ?> </font>
 </td>
</tr>

<tr>
<th align='right'> COUNTRY </th>
<td> <input type ='text' name='Country'>  <font color='blue'> <?php echo @$_GET['s_country']; ?> </font>
 </td>
</tr>


<tr>
<th align='right'> BATSMAN RUNS </th>
<td> <input type ='number_format' name='bat_runs'>  <font color='blue'> <?php echo @$_GET['s_btruns']; ?> </font>
 </td>
</tr>

<tr>
<th align='right'> BALLS FACED </th>
<td> <input type ='number_format' name='balls_faced'>  <font color='blue'> <?php echo @$_GET['s_bfaced']; ?> </font>
 </td>
</tr>

<tr>
<th align='right'> RUNS AGAINST </th>
<td> <input type ='number_format' name='ball_runs'>  <font color='blue'> <?php echo @$_GET['s_blruns']; ?> </font>
 </td>
</tr>

<tr>
<th align='right'> NO OF BOWLS BOWLED </th>
<td> <input type ='number_format' name='balls'>  <font color='blue'> <?php echo @$_GET['s_balls']; ?> </font>
 </td>
</tr>

<tr>
<th align='right'> WICKETS </th>
<td> <input type ='number_format' name='wickets'>  <font color='blue'> <?php echo @$_GET['s_wkt']; ?> </font>
 </td>
</tr>

<tr>
<th align='right'> PLAYER ID </th>
<td> <input type ='number_format' name='P_ID'>  <font color='blue'> <?php echo @$_GET['s_pid']; ?> </font>
 </td>
</tr>


<tr>
<td align='center' colspan='6'>
 <input type ='submit' name='submit' value='Submit'>
 </td>
</tr>


</table>
</form>
</body>
</html>


<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('cricpedia',$conn);

if(isset($_POST['submit']))

{
$match_id= $_POST ['Match_id'];
$playername= $_POST ['player_name'];
$country= $_POST ['Country'];
$batruns= $_POST ['bat_runs'];
$ballsfaced= $_POST ['balls_faced'];
$ballruns= $_POST ['ball_runs'];
$sballs= $_POST ['balls'];
$swickets= $_POST ['wickets'];
$pid= $_POST ['P_ID'];


if($match_id=='')
{
	echo "<script>window.open('add_score.php?s_mid=Enter MATCH ID','_self')</script>";
	exit();
	}

if($playername=='')
{
	echo "<script>window.open('add_score.php?s_pname=Enter PLAYER NAME','_self')</script>";
	exit();
	}
	
	if($country=='')
{
	echo "<script>window.open('add_score.php?s_country=Enter PLAYER NAME','_self')</script>";
	exit();
	}

	if($batruns=='')
{
	echo "<script>window.open('add_score.php?s_btruns=Enter BATSMAN RUNS,'_self')</script>";
	exit();
	}

if($ballsfaced=='')
{
	echo "<script>window.open('add_score.php?s_bfaced=Enter BALLS FACED','_self')</script>";
	exit();
	}
	
	if($ballruns=='')
{
	echo "<script>window.open('add_score.php?s_blruns=Enter RUNS AGAINST,'_self')</script>";
	exit();
	}

if($sballs=='')
{
	echo "<script>window.open('add_score.php?s_balls=Enter BALLS BOWLED','_self')</script>";
	exit();
	}
	
	if($swickets=='')
{
	echo "<script>window.open('add_score.php?s_wkt=Enter WICKETS,'_self')</script>";
	exit();
	}

if($pid=='')
{
	echo "<script>window.open('add_score.php?s_pid=Enter PLAYER ID','_self')</script>";
	exit();
	}
	
	

	$que= " insert into scorecard values ('$match_id','$playername','$country','$batruns','$ballsfaced',
	'$ballruns','$sballs','$swickets','$pid')";
	
	if(mysql_query($que))
	{echo "data has been inserted";}
}
?>