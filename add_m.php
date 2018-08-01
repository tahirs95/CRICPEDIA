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
				left: -150px;
				right: 200px;
				width: 1100px;
				height: 520px;
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
					Admin <div id="o">/</div> Match <div id="o">/</div> <div id="f">Add match record</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 
			<form method='post' action='add_m.php'>
			<table align='center'> 


			<tr>
			<th align='right'> MATCH ID </th>
			<td> <input type ='number_format' name='Match_id'> <font color='blue'> <?php echo @$_GET['m_id']; ?> </font>
			</td>
			</tr>

			<tr>
			<th align='right'> TEAM 1 </th>
			<td> <input type ='text' name='Team1'> <font color='blue'> <?php echo @$_GET['t_1']; ?> </font>
			</td>
			</tr>

			<tr>
			<th align='right'> TEAM 2 </th>
			<td> <input type ='text' name='Team2'>  <font color='blue'> <?php echo @$_GET['t_2']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> VENUE </th>
			<td> <input type ='text' name='Venue'> <font color='blue'> <?php echo @$_GET['v']; ?> </font>
			</td>
			</tr>

			<tr>
			<th align='right'> MATCH DATE</th>
			<td> <input type ='date' name='Match_date'>
			<font color='blue'> <?php echo @$_GET['m_d']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> RESULT </th>
			<td> <input type ='text' name='Result'>
			<font color='blue'> <?php echo @$_GET['res']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> TEAM 1 SCORE</th>
			<td> <input type ='text' name='T1_score'>
			<font color='blue'> <?php echo @$_GET['scr_1']; ?> </font>
			 </td>
			</tr>


			<tr>
			<th align='right'> TEAM 2 SCORE</th>
			<td> <input type ='text' name='T2_score'>
			<font color='blue'> <?php echo @$_GET['scr_2']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> FORMAT</th>
			 
			 <td>
				 <select name='Format_id'>
				 <option value='null'> Select </option>
				 <option value='20'> 20 </option>
				 <option value='30'> 30 </option>
				 </select>
				
				 <font color='blue'> <?php echo @$_GET['fmt']; ?> </font>
				  </td>
			</tr>

			<tr>
			<th align='right'> TEAM 1 BEST BATTING </th>
			<td> <input type ='text' name='T1_batting'>
			<font color='blue'> <?php echo @$_GET['t_1batting']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> TEAM 1 BEST BOWLING</th>
			<td> <input type ='text' name='T1_bowling'>
			<font color='blue'> <?php echo @$_GET['t_1bowling']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> TEAM 2 BEST BATTING </th>
			<td> <input type ='text' name='T2_batting'>
			<font color='blue'> <?php echo @$_GET['t_2batting']; ?> </font>
			 </td>
			</tr>

			<tr>
			<th align='right'> TEAM 2 BEST BOWLING</th>
			<td> <input type ='text' name='T2_bowling'>
			<font color='blue'> <?php echo @$_GET['t_2bowling']; ?> </font>
			 </td>
			</tr>

			<tr>
			<td align='center' colspan='15'>
			 <input type ='submit' name='submit' value='Submit'>
			 </td>
			</tr>


			</table>
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
	$match_id= $_POST ['Match_id'];
	$team_1= $_POST ['Team1'];
	$team_2= $_POST ['Team2'];
	$venue= $_POST ['Venue'];
	$match_date= $_POST ['Match_date'];
	$result= $_POST ['Result'];
	$t1_score= $_POST ['T1_score'];
	$t2_score= $_POST ['T2_score'];
	$format_id= $_POST ['Format_id'];
	$t1_batting= $_POST ['T1_batting'];
	$t1_bowling= $_POST ['T1_bowling'];
	$t2_batting= $_POST ['T2_batting'];
	$t2_bowling= $_POST ['T2_bowling'];
	
	
	if($match_id=='')
{
	echo "<script>window.open('add_m.php?m_id=Enter MATCH ID','_self')</script>";
	exit();
	}

	
if($team_1=='')
{
	echo "<script>window.open('add_m.php?t_1=Enter Team 1','_self')</script>";
	exit();
	}


if($team_2=='')
{
	echo "<script>window.open('add_m.php?t_2=Enter Team 2','_self')</script>";
	exit();
	}
	
	if($venue=='')
{
	echo "<script>window.open('add_m.php?v=Enter VENUE','_self')</script>";
	exit();
	}


	if($match_date=='')
{
	echo "<script>window.open('add_m.php?m_d=Match date is required','_self')</script>";
	exit();
	}

	if($result=='')
{
	echo "<script>window.open('add_m.php?res= Result is required','_self')</script>";
	exit();
	}

	if($t1_score=='')
{
	echo "<script>window.open('add_m.php?scr_1= Team 1's Score is required','_self')</script>";
	exit();
	}

	if($t2_score=='')
{
	echo "<script>window.open('add_m.php?scr_2= Team 2's Score is required','_self')</script>";
	exit();
	}
	


	
	if($format_id=='')
{
	echo "<script>window.open('add_m.php?fmt= Format ID is required','_self')</script>";
	exit();
	}

	if($t1_batting=='')
{
	echo "<script>window.open('add_m.php?t_1batting=Enter Team 1 BEST BATSMAN','_self')</script>";
	exit();
	}

	if($t1_bowling=='')
{
	echo "<script>window.open('add_m.php?t_1bowling=Enter Team 1 BEST BOWLER','_self')</script>";
	exit();
	}

	if($t2_batting=='')
{
	echo "<script>window.open('add_m.php?t_2batting=Enter Team 2 BEST BATSMAN','_self')</script>";
	exit();
	}

	if($t2_bowling=='')
{
	echo "<script>window.open('add_m.php?t_2bowling=Enter Team 2 BEST BOWLER','_self')</script>";
	exit();
	}
	

	$que= " insert into matches values ('$match_id','$team_1','$team_2','$venue','$match_date',
	'$result','$t1_score','$t2_score','$format_id','$t1_batting','$t1_bowling','$t2_batting','$t2_bowling')";
	
	if(mysql_query($que))
	{echo "data has been inserted";}
}
?>