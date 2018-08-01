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
					Admin <div id="o">/</div> Ranking <div id="o">/</div> <div id="f">Add ranking record</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 
				<form method='post' action='add_r.php'>
				<table width='700'> 

				<tr>
				<th align='right'> COUNTRY </th>
				<td> <input type ='text' name='Country'> <font color='blue'> <?php echo @$_GET['c']; ?> </font>
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
				<th align='right'> RATING </th>
				<td> <input type ='number_format' name='Rating'>  <font color='blue'> <?php echo @$_GET['r']; ?> </font>
				 </td>
				</tr>

				<tr>
				<th align='right'> POINTS</th>
				<td> <input type ='number_format' name='Points'>
				<font color='blue'> <?php echo @$_GET['p']; ?> </font>
				 </td>
				</tr>


				<tr>
				<td align='center' colspan='6'>
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
$country= $_POST ['Country'];
$format_id= $_POST ['Format_id'];
$rating= $_POST ['Rating'];
$points= $_POST ['Points'];


if($country=='')
{
	echo "<script>window.open('add_r.php?c=Enter COUNTRY','_self')</script>";
	exit();
	}

if($format_id=='')
{
	echo "<script>window.open('add_r.php?fmt=Enter FORMAT ID','_self')</script>";
	exit();
	}

	if($rating=='')
{
	echo "<script>window.open('add_r.php?r=RATING is required','_self')</script>";
	exit();
	}

	if($points=='')
{
	echo "<script>window.open('add_r.php?p= POINTS is required','_self')</script>";
	exit();
	}

	


	

	$que= " insert into ranking values ('$country','$format_id','$rating','$points')";
	
	if(mysql_query($que))
	{echo "data has been inserted";}
}
?>