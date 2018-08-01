<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$edit_record= $_GET['edit'];


$que= "select * from player where P_ID='$edit_record' ";

$run= mysql_query($que);

while ($row=mysql_fetch_array($run))
{
	$edit_p_id=$row[0];
	$edit_full_name=$row[1];
	$edit_dob=$row[2];
	$edit_debut=$row[3];
    $edit_role=$row[4];
	$edit_batting_style=$row[5];
	$edit_bowling_style=$row[6];
	$edit_country=$row[7];	

}
?>

<html>
    <head>
        <title>
			UPDATING PLAYER RECORD
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
					Admin <div id="o">/</div> Player <div id="o">/</div> <div id="f">Update player</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 
				<form method='post' action='edit_player.php?edit_form=<?php echo $edit_p_id; ?>'>
		 
				<table width='99%'> 
	
					<tr>
						<th align='right'> P_ID </th>
						<td>
						 <input type ='number_format' name='P_ID1'  value='<?php echo $edit_p_id ; ?>'  > 
						</td>
					</tr>


					<tr>
						<th align='right'> FULL NAME </th>
						<td> <input type ='text' name='Full_Name1'  value='<?php echo $edit_full_name; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> DOB </th>
						<td> <input type ='date' name='DOB1'  value='<?php echo $edit_dob; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> DEBUT </th>
						<td> <input type ='date' name='Debut1'  value='<?php echo $edit_debut; ?>'>  
						</td>
					</tr>


					<tr>
						<th align='right'> ROLE</th>
						<td> 
							<select name='Role1'>
							<option value='<?php echo $edit_role ; ?>'> <?php echo $edit_role ; ?></option>
							
							<option value='Opening Batsman'> Opening Batsman </option>
							<option value='Top-order Batsman'> Top-order Batsman </option>
							<option value='Middle-order Batsman'> Middle-order Batsman </option>
							<option value='Wicket Keeper'> Wicket Keeper </option>
							<option value='Allrounder'> Allrounder </option>
							<option value='Bowler'> Bowler </option>
							 
							</select>
						 </td>
					</tr>

					<tr>
						<th align='right'> Batting Style</th>
						 
						<td>
							<select name='Batting_style1'>
							<option value='<?php echo $edit_batting_style; ?>'> <?php echo $edit_batting_style ; ?></option>
							<option value='Right-hand bat'> Right-hand bat </option>
							<option value='Left-hand bat'> Left-hand bat </option>
							</select>
						</td>
					</tr>

					<tr>
						<th align='right'>  Bowling Style </th>

						<td>
							 <select name='Bowling_style1'>
							 <option value='<?php echo $edit_bowling_style; ?>'> <?php echo $edit_bowling_style ; ?></option>
							 <option value='Legbreak'> Legbreak </option>
							 <option value='Right-arm-offbreak'> Right-arm-offbreak</option>
							 <option value='Slow left-arm orthodox'> Slow left-arm orthodox </option>
							 <option value='Right-arm medium-fast'> Right-arm medium-fast </option>
							 <option value='Left-arm medium-fast'> Left-arm medium-fast </option>
							 <option value='Left-arm fast'> Left-arm fast </option>
							 <option value='Right-arm fast'> Right-arm fast </option> 
							</select>
						</td>
					</tr>

					<tr>
						<th align='right'> COUNTRY </th>
						<td> <input type ='text' name='Country1'  value='<?php echo $edit_country; ?>'>  
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
	$edit_record= $_GET['edit_form'];
	
	$edit_p_id= $_POST['P_ID1'];
	$edit_full_name= $_POST['Full_Name1'];
	$edit_dob= $_POST['DOB1'];
	$edit_debut= $_POST['Debut1'];
	$edit_role= $_POST['Role1'];
	$edit_batting_style= $_POST['Batting_style1'];
	$edit_bowling_style= $_POST['Bowling_style1'];
	$edit_country= $_POST['Country1'];
	
	$query1= "update player set P_ID='$edit_p_id', Full_Name='$edit_full_name',
	DOB='$edit_dob', Debut='$edit_debut' , Role='$edit_role' ,  Batting_style='$edit_batting_style' ,
	Bowling_style='$edit_bowling_style' , Country='$edit_country' where P_ID='$edit_p_id'";
	
	if(mysql_query($query1))
	{
		echo "<script>window.open('view_player.php?updated=Record has been updated successfully','_self')</script>";
	}	
}

?>