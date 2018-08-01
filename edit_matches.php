<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$edit_record= $_GET['edit'];


$que= "select * from matches where Match_id='$edit_record' ";

$run= mysql_query($que);

while ($row=mysql_fetch_array($run))
{
	$edit_mid=$row[0];
	$edit_t1=$row[1];
	$edit_t2=$row[2];
	$edit_venue=$row[3];
    $edit_matchdate=$row[4];
	$edit_result=$row[5];
	$edit_t1scr=$row[6];
	$edit_t2scr=$row[7];
	$edit_fid=$row[8];
	$edit_t1bat=$row[9];
	$edit_t1bowl=$row[10];
	$edit_t2bat=$row[11];
	$edit_t2bowl=$row[12];

}
?>

<html>
    <head>
        <title>
			UPDATING MATCH RECORD
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
					Admin <div id="o">/</div> Match <div id="o">/</div> <div id="f">Update match</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 

				<form method='post' action='edit_matches.php?edit_form=<?php echo $edit_mid ?>'>
	 
				<table width='99%'> 

					<tr>
						<th align='right'> MATCH ID </th>
						<td>
						 <input type ='number_format' name='Match_id1'  value='<?php echo $edit_mid ; ?>'  > 
						</td>
					</tr>


					<tr>
						<th align='right'> TEAM 1 </th>
						<td> <input type ='text' name='Team11'  value='<?php echo $edit_t1; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 2</th>
						<td> <input type ='text' name='Team21'  value='<?php echo $edit_t2; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> VENUE</th>
						<td> <input type ='text' name='Venue1'  value='<?php echo $edit_venue; ?>'>  
						</td>
					</tr>



					<tr>
						<th align='right'> MATCH DATE </th>
						<td> <input type ='date' name='Match_date1'  value='<?php echo $edit_matchdate; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> RESULT </td>
						<td> <input type ='text' name='Result1'  value='<?php echo $edit_result; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 1 SCORE </th>
						<td> <input type ='text' name='T1_score1'  value='<?php echo $edit_t1scr; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 2 SCORE </th>
						<td> <input type ='text' name='T2_score1'  value='<?php echo $edit_t2scr; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> FORMAT ID </th>
						<td> <input type ='number_format' name='Format_id1'  value='<?php echo $edit_fid; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 1 BEST BATSMAN </th>
						<td> <input type ='text' name='T1_batting1'  value='<?php echo $edit_t1bat; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 1 BEST BOWLER </th>
						<td> <input type ='text' name='T1_bowling1'  value='<?php echo $edit_t1bowl; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 2 BEST BATSMAN </th>
						<td> <input type ='text' name='T2_batting1'  value='<?php echo $edit_t2bat; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> TEAM 2 BEST BOWLER</th>
						<td> <input type ='text' name='T2_bowling1'  value='<?php echo $edit_t2bowl; ?>'>  
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
	$edit_record= $_GET['edit_form'];
	
	
	$edit_mid1= $_POST['Match_id1'];
	$edit_t11= $_POST['Team11'];
	$edit_t21= $_POST['Team21'];
	$edit_venue1= $_POST['Venue1'];
	$edit_matchdate1= $_POST['Match_date1'];
	$edit_result1= $_POST['Result1'];
	$edit_t1scr1= $_POST['T1_score1'];
	$edit_t2scr1= $_POST['T2_score1'];
	$edit_fid1= $_POST['Format_id1'];
	$edit_t1bat1= $_POST['T1_batting1'];
	$edit_t1bowl1= $_POST['T2_bowling1'];
	$edit_t2bat1= $_POST['T2_batting1'];
	$edit_t2bowl1= $_POST['T2_bowling1'];
	
	
	
	
	
	
	$query1= "update matches set Match_id='$edit_mid1', Team1='$edit_t11',
	Team2='$edit_t21', Venue='$edit_venue1' , Match_date='$edit_matchdate1' , 
	Result='$edit_result1' , T1_score='$edit_t1scr1' , T2_score='$edit_t2scr1', 
	Format_id='$edit_fid1', T1_batting='$edit_t1bat1', T1_bowling='$edit_t1bowl1',
	T2_batting='$edit_t2bat1',T2_bowling='$edit_t2bowl1' where Match_id='$edit_mid1'";
	 
	if(mysql_query($query1))
{
	echo "<script>window.open('view_matches.php?updated=Record has been updated successfully','_self')</script>";
}
	
}

?>